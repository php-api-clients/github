<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForAuthenticatedUser
{
    public const OPERATION_ID = 'repos/list-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/repos';
    private const METHOD = 'GET';
    private const PATH = '/user/repos';
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private string $direction;
    /**Only show repositories updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    /**Only show repositories updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $before;
    /**Limit results to repositories with the specified visibility.**/
    private string $visibility;
    /**Comma-separated list of values. Can include:  
     * `owner`: Repositories that are owned by the authenticated user.  
     * `collaborator`: Repositories that the user has been added to as a collaborator.  
     * `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on.**/
    private string $affiliation;
    /**Limit results to repositories of the specified type. Will cause a `422` error if used in the same request as **visibility** or **affiliation**.**/
    private string $type;
    /**The property to sort the results by.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Repos $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Repos $hydrator, string $direction, string $since, string $before, string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', int $perPage = 30, int $page = 1)
    {
        $this->direction = $direction;
        $this->since = $since;
        $this->before = $before;
        $this->visibility = $visibility;
        $this->affiliation = $affiliation;
        $this->type = $type;
        $this->sort = $sort;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{direction}', '{since}', '{before}', '{visibility}', '{affiliation}', '{type}', '{sort}', '{per_page}', '{page}'), array($this->direction, $this->since, $this->before, $this->visibility, $this->affiliation, $this->type, $this->sort, $this->perPage, $this->page), self::PATH . '?direction={direction}&since={since}&before={before}&visibility={visibility}&affiliation={affiliation}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Repository>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Repository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Repository {
                            return $this->hydrator->hydrateObject(Schema\Repository::class, $body);
                        });
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
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
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
