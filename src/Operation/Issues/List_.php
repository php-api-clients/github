<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Issues;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class List_
{
    public const OPERATION_ID = 'issues/list';
    public const OPERATION_MATCH = 'GET /issues';
    private const METHOD = 'GET';
    private const PATH = '/issues';
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    private string $labels;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    private bool $collab;
    private bool $orgs;
    private bool $owned;
    private bool $pulls;
    /**Indicates which sorts of issues to return. `assigned` means issues assigned to you. `created` means issues created by you. `mentioned` means issues mentioning you. `subscribed` means issues you're subscribed to updates for. `all` or `repos` means all issues you can see, regardless of participation or creation.**/
    private string $filter;
    /**Indicates the state of the issues to return.**/
    private string $state;
    /**What to sort results by.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Issues $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Issues $hydrator, string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter = 'assigned', string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->labels = $labels;
        $this->since = $since;
        $this->collab = $collab;
        $this->orgs = $orgs;
        $this->owned = $owned;
        $this->pulls = $pulls;
        $this->filter = $filter;
        $this->state = $state;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{labels}', '{since}', '{collab}', '{orgs}', '{owned}', '{pulls}', '{filter}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->labels, $this->since, $this->collab, $this->orgs, $this->owned, $this->pulls, $this->filter, $this->state, $this->sort, $this->direction, $this->perPage, $this->page), self::PATH . '?labels={labels}&since={since}&collab={collab}&orgs={orgs}&owned={owned}&pulls={pulls}&filter={filter}&state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Issue>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Issue::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Issue {
                            return $this->hydrator->hydrateObject(Schema\Issue::class, $body);
                        });
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
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
