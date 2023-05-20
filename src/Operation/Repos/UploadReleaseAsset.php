<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class UploadReleaseAsset
{
    public const OPERATION_ID    = 'repos/upload-release-asset';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/releases/{release_id}/assets';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/assets';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the release. **/
    private int $releaseId;
    private string $name;
    private string $label;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets $hydrator, string $owner, string $repo, int $releaseId, string $name, string $label)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->releaseId               = $releaseId;
        $this->name                    = $name;
        $this->label                   = $label;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{release_id}', '{name}', '{label}'], [$this->owner, $this->repo, $this->releaseId, $this->name, $this->label], self::PATH . '?name={name}&label={label}'), ['Content-Type' => 'application/octet-stream'], json_encode($data));
    }

    /**
     * @return Schema\ReleaseAsset|array{code: int}
     */
    public function createResponse(ResponseInterface $response): Schema\ReleaseAsset|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response for successful upload
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ReleaseAsset::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ReleaseAsset::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response if you upload an asset with the same filename as another uploaded asset
             **/
            case 422:
                return ['code' => 422];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
