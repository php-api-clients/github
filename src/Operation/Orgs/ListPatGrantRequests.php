<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListPatGrantRequests
{
    public const OPERATION_ID = 'orgs/list-pat-grant-requests';
    public const OPERATION_MATCH = 'GET /organizations/{org}/personal-access-token-requests';
    private const METHOD = 'GET';
    private const PATH = '/organizations/{org}/personal-access-token-requests';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**A list of owner usernames to use to filter the results.**/
    private array $owner;
    /**The name of the repository to use to filter the results.**/
    private string $repository;
    /**The permission to use to filter the results.**/
    private string $permission;
    /**Only show fine-grained personal access tokens used before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $lastUsedBefore;
    /**Only show fine-grained personal access tokens used after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $lastUsedAfter;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The property by which to sort the results.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokenRequests $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokenRequests $hydrator, string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage = 30, int $page = 1, string $sort = 'created_at', string $direction = 'desc')
    {
        $this->org = $org;
        $this->owner = $owner;
        $this->repository = $repository;
        $this->permission = $permission;
        $this->lastUsedBefore = $lastUsedBefore;
        $this->lastUsedAfter = $lastUsedAfter;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{owner}', '{repository}', '{permission}', '{last_used_before}', '{last_used_after}', '{per_page}', '{page}', '{sort}', '{direction}'), array($this->org, $this->owner, $this->repository, $this->permission, $this->lastUsedBefore, $this->lastUsedAfter, $this->perPage, $this->page, $this->sort, $this->direction), self::PATH . '?owner={owner}&repository={repository}&permission={permission}&last_used_before={last_used_before}&last_used_after={last_used_after}&per_page={per_page}&page={page}&sort={sort}&direction={direction}'));
    }
    /**
     * @return \Rx\Observable<Schema\OrganizationProgrammaticAccessGrantRequest>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\OrganizationProgrammaticAccessGrantRequest::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\OrganizationProgrammaticAccessGrantRequest {
                            return $this->hydrator->hydrateObject(Schema\OrganizationProgrammaticAccessGrantRequest::class, $body);
                        });
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
            /**Internal Error**/
            case 500:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
