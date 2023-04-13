<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetRepositoryAdvisory
{
    public const OPERATION_ID = 'security-advisories/get-repository-advisory';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/security-advisories/{ghsa_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/security-advisories/{ghsa_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The GHSA (GitHub Security Advisory) identifier of the advisory.**/
    private string $ghsaId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecurityDashAdvisories\CbGhsaIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecurityDashAdvisories\CbGhsaIdRcb $hydrator, string $owner, string $repo, string $ghsaId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ghsaId = $ghsaId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{ghsa_id}'), array($this->owner, $this->repo, $this->ghsaId), self::PATH));
    }
    /**
     * @return Schema\RepositoryAdvisory
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\RepositoryAdvisory
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\RepositoryAdvisory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\RepositoryAdvisory::class, $body);
                    /**
                     * Forbidden
                    **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
