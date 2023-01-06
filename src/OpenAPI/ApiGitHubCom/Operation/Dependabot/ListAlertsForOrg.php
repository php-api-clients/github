<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class ListAlertsForOrg
{
    private const OPERATION_ID = 'dependabot/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/alerts';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**A comma-separated list of states. If specified, only alerts with these states will be returned.
    
    Can be: `dismissed`, `fixed`, `open`**/
    private readonly string $state;
    /**A comma-separated list of severities. If specified, only alerts with these severities will be returned.
    
    Can be: `low`, `medium`, `high`, `critical`**/
    private readonly string $severity;
    /**A comma-separated list of ecosystems. If specified, only alerts for these ecosystems will be returned.
    
    Can be: `composer`, `go`, `maven`, `npm`, `nuget`, `pip`, `pub`, `rubygems`, `rust`**/
    private readonly string $ecosystem;
    /**A comma-separated list of package names. If specified, only alerts for these packages will be returned.**/
    private readonly string $package;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned.**/
    private readonly string $scope;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private readonly string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private readonly string $after;
    /****Deprecated**. The number of results per page (max 100), starting from the first matching result.
    This parameter must not be used in combination with `last`.
    Instead, use `per_page` in combination with `after` to fetch the first page of results.**/
    private readonly int $first;
    /****Deprecated**. The number of results per page (max 100), starting from the last matching result.
    This parameter must not be used in combination with `first`.
    Instead, use `per_page` in combination with `before` to fetch the last page of results.**/
    private readonly int $last;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $sort = 'created', string $direction = 'desc', string $before, string $after, int $first = 30, int $last, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->org = $org;
        $this->state = $state;
        $this->severity = $severity;
        $this->ecosystem = $ecosystem;
        $this->package = $package;
        $this->scope = $scope;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->before = $before;
        $this->after = $after;
        $this->first = $first;
        $this->last = $last;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{state}', '{severity}', '{ecosystem}', '{package}', '{scope}', '{sort}', '{direction}', '{before}', '{after}', '{first}', '{last}', '{per_page}'), array($this->org, $this->state, $this->severity, $this->ecosystem, $this->package, $this->scope, $this->sort, $this->direction, $this->before, $this->after, $this->first, $this->last, $this->per_page), '/orgs/{org}/dependabot/alerts?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&scope={scope}&sort={sort}&direction={direction}&before={before}&after={after}&first={first}&last={last}&per_page={per_page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListAlertsForOrg\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListAlertsForOrg\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ListAlertsForOrg\\Response\\Application\\Json\\H200', $body);
                }
                break;
            /**Not modified**/
            case 304:
                switch ($contentType) {
                }
                break;
            /**Bad Request**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ScimError', $body);
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationErrorSimple', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
