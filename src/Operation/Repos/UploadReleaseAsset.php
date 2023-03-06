<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class UploadReleaseAsset
{
    public const OPERATION_ID = 'repos/upload-release-asset';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/releases/{release_id}/assets';
    private const METHOD = 'POST';
    private const PATH = '/repos/{owner}/{repo}/releases/{release_id}/assets';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the release.**/
    private int $release_id;
    private string $name;
    private string $label;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets $hydrator, string $owner, string $repo, int $release_id, string $name, string $label)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
        $this->name = $name;
        $this->label = $label;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Repos\UploadReleaseAsset\Request\ApplicationoctetStream::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{release_id}', '{name}', '{label}'), array($this->owner, $this->repo, $this->release_id, $this->name, $this->label), self::PATH . '?name={name}&label={label}'), array('Content-Type' => 'application/octet-stream'), json_encode($data));
    }
    /**
     * @return Schema\ReleaseAsset
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ReleaseAsset
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response for successful upload**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ReleaseAsset::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ReleaseAsset::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
