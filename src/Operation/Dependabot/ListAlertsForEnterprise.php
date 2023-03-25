<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForEnterprise
{
    public const OPERATION_ID = 'dependabot/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/dependabot/alerts';
    private const METHOD = 'GET';
    private const PATH = '/enterprises/{enterprise}/dependabot/alerts';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
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
    /****Deprecated**. The number of results per page (max 100), starting from the first matching result.
    This parameter must not be used in combination with `last`.
    Instead, use `per_page` in combination with `after` to fetch the first page of results.**/
    private int $first;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts $hydrator, string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $first = 30, int $perPage = 30)
    {
        $this->enterprise = $enterprise;
        $this->state = $state;
        $this->severity = $severity;
        $this->ecosystem = $ecosystem;
        $this->package = $package;
        $this->scope = $scope;
        $this->before = $before;
        $this->after = $after;
        $this->last = $last;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->first = $first;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{state}', '{severity}', '{ecosystem}', '{package}', '{scope}', '{before}', '{after}', '{last}', '{sort}', '{direction}', '{first}', '{per_page}'), array($this->enterprise, $this->state, $this->severity, $this->ecosystem, $this->package, $this->scope, $this->before, $this->after, $this->last, $this->sort, $this->direction, $this->first, $this->perPage), self::PATH . '?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&scope={scope}&before={before}&after={after}&last={last}&sort={sort}&direction={direction}&first={first}&perPage={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\DependabotAlertWithRepository>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\DependabotAlertWithRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\DependabotAlertWithRepository {
                            return $this->hydrator->hydrateObject(Schema\DependabotAlertWithRepository::class, $body);
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationErrorSimple(422, $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
