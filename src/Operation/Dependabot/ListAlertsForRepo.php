<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForRepo
{
    public const OPERATION_ID = 'dependabot/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/dependabot/alerts';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**A comma-separated list of states. If specified, only alerts with these states will be returned.
    
    Can be: `dismissed`, `fixed`, `open`**/
    private string $state;
    /**A comma-separated list of severities. If specified, only alerts with these severities will be returned.
    
    Can be: `low`, `medium`, `high`, `critical`**/
    private string $severity;
    /**A comma-separated list of ecosystems. If specified, only alerts for these ecosystems will be returned.
    
    Can be: `composer`, `go`, `maven`, `npm`, `nuget`, `pip`, `pub`, `rubygems`, `rust`**/
    private string $ecosystem;
    /**A comma-separated list of package names. If specified, only alerts for these packages will be returned.**/
    private string $package;
    /**A comma-separated list of full manifest paths. If specified, only alerts for these manifests will be returned.**/
    private string $manifest;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned.**/
    private string $scope;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private string $after;
    /****Deprecated**. The number of results per page (max 100), starting from the last matching result.
    This parameter must not be used in combination with `first`.
    Instead, use `per_page` in combination with `before` to fetch the last page of results.**/
    private int $last;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /****Deprecated**. Page number of the results to fetch. Use cursor-based pagination with `before` or `after` instead.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /****Deprecated**. The number of results per page (max 100), starting from the first matching result.
    This parameter must not be used in combination with `last`.
    Instead, use `per_page` in combination with `after` to fetch the first page of results.**/
    private int $first;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts $hydrator, string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, int $first = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->severity = $severity;
        $this->ecosystem = $ecosystem;
        $this->package = $package;
        $this->manifest = $manifest;
        $this->scope = $scope;
        $this->before = $before;
        $this->after = $after;
        $this->last = $last;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->first = $first;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{state}', '{severity}', '{ecosystem}', '{package}', '{manifest}', '{scope}', '{before}', '{after}', '{last}', '{sort}', '{direction}', '{page}', '{per_page}', '{first}'), array($this->owner, $this->repo, $this->state, $this->severity, $this->ecosystem, $this->package, $this->manifest, $this->scope, $this->before, $this->after, $this->last, $this->sort, $this->direction, $this->page, $this->per_page, $this->first), self::PATH . '?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&manifest={manifest}&scope={scope}&before={before}&after={after}&last={last}&sort={sort}&direction={direction}&page={page}&per_page={per_page}&first={first}'));
    }
    /**
     * @return \Rx\Observable<Schema\DependabotAlert>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\DependabotAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\DependabotAlert {
                            return $this->hydrator->hydrateObject(Schema\DependabotAlert::class, $body);
                        });
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ValidationErrorSimple::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
