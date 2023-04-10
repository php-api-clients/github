<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetPagesBuild
{
    public const OPERATION_ID = 'repos/get-pages-build';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pages/builds/{build_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/pages/builds/{build_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private int $buildId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb $hydrator, string $owner, string $repo, int $buildId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->buildId = $buildId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{build_id}'), array($this->owner, $this->repo, $this->buildId), self::PATH));
    }
    /**
     * @return Schema\PageBuild
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PageBuild
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\PageBuild::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\PageBuild::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
