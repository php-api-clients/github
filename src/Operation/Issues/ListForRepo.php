<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForRepo
{
    public const OPERATION_ID = 'issues/list-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/issues';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned.**/
    private string $milestone;
    /**Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user.**/
    private string $assignee;
    /**The user that created the issue.**/
    private string $creator;
    /**A user that's mentioned in the issue.**/
    private string $mentioned;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    private string $labels;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
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
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues $hydrator, string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone = $milestone;
        $this->assignee = $assignee;
        $this->creator = $creator;
        $this->mentioned = $mentioned;
        $this->labels = $labels;
        $this->since = $since;
        $this->state = $state;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{milestone}', '{assignee}', '{creator}', '{mentioned}', '{labels}', '{since}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->milestone, $this->assignee, $this->creator, $this->mentioned, $this->labels, $this->since, $this->state, $this->sort, $this->direction, $this->perPage, $this->page), self::PATH . '?milestone={milestone}&assignee={assignee}&creator={creator}&mentioned={mentioned}&labels={labels}&since={since}&state={state}&sort={sort}&direction={direction}&perPage={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Issue>|Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|Schema\BasicError
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
            /**Moved permanently**/
            case 301:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
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
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
