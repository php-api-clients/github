<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DownloadArtifactStreaming
{
    public const OPERATION_ID = 'actions/download-artifact';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the artifact.**/
    private int $artifact_id;
    private string $archive_format;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb $hydrator;
    private readonly \React\Http\Browser $browser;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb $hydrator, \React\Http\Browser $browser, string $owner, string $repo, int $artifact_id, string $archive_format)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifact_id;
        $this->archive_format = $archive_format;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->browser = $browser;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{artifact_id}', '{archive_format}'), array($this->owner, $this->repo, $this->artifact_id, $this->archive_format), self::PATH));
    }
    /**
     * @return \Rx\Observable<string>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Gone**/
            case 410:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Response**/
            case 302:
                $stream = new \Rx\Subject\Subject();
                $this->browser->requestStreaming('GET', $response->getHeaderLine('location'))->then(static function (\Psr\Http\Message\ResponseInterface $response) use($stream) : void {
                    $body = $response->getBody();
                    if (!($body instanceof \Psr\Http\Message\StreamInterface && $body instanceof \React\Stream\ReadableStreamInterface)) {
                        $stream->onError(new \RuntimeException());
                        return;
                    }
                    $body->on('data', static function (string $data) use($stream) : void {
                        $stream->onNext($data);
                    });
                    $body->on('close', static function () use($stream) : void {
                        $stream->onCompleted();
                    });
                    $body->on('error', static function (\Throwable $error) use($stream) : void {
                        $stream->onError($error);
                    });
                });
                return $stream;
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
