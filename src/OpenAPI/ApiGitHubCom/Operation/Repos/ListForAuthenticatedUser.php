<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListForAuthenticatedUser
{
    private const OPERATION_ID = 'repos/list-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/repos';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
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
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $before;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1, string $since, string $before)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->visibility = $visibility;
        $this->affiliation = $affiliation;
        $this->type = $type;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->since = $since;
        $this->before = $before;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{visibility}', '{affiliation}', '{type}', '{sort}', '{direction}', '{per_page}', '{page}', '{since}', '{before}'), array($this->visibility, $this->affiliation, $this->type, $this->sort, $this->direction, $this->per_page, $this->page, $this->since, $this->before), '/user/repos?visibility={visibility}&affiliation={affiliation}&type={type}&sort={sort}&direction={direction}&per_page={per_page}&page={page}&since={since}&before={before}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Repository', $body);
                        });
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationError', $body);
                }
                break;
            /**Not modified**/
            case 304:
                return 304;
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
