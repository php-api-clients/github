<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Activity;

final class ListRepoNotificationsForAuthenticatedUser
{
    public const OPERATION_ID = 'activity/list-repo-notifications-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/notifications';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/notifications';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $before;
    /**If `true`, show notifications marked as read.**/
    private bool $all;
    /**If `true`, only shows notifications in which the user is directly participating or mentioned.**/
    private bool $participating;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $hydrator, string $owner, string $repo, string $since, string $before, bool $all = false, bool $participating = false, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->since = $since;
        $this->before = $before;
        $this->all = $all;
        $this->participating = $participating;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{since}', '{before}', '{all}', '{participating}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->since, $this->before, $this->all, $this->participating, $this->per_page, $this->page), self::PATH . '?since={since}&before={before}&all={all}&participating={participating}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\Thread>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Thread::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\Thread {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Thread', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
