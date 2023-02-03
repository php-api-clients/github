<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Activity
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function listPublicEvents(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function getFeeds() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeeds
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeeds($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function listPublicEventsForRepoNetwork(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForRepoNetwork
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForRepoNetwork($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function listNotificationsForAuthenticatedUser(bool $all = false, bool $participating = false, string $since, string $before, int $page = 1, int $per_page = 50) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $all, $participating, $since, $before, $page, $per_page);
    }
    public function markNotificationsAsRead() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getThread(int $thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $thread_id);
    }
    public function markThreadAsRead(int $thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $thread_id);
    }
    public function getThreadSubscriptionForAuthenticatedUser(int $thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $thread_id);
    }
    public function setThreadSubscription(int $thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $thread_id);
    }
    public function deleteThreadSubscription(int $thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $thread_id);
    }
    public function listPublicOrgEvents(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicOrgEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicOrgEvents($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $per_page, $page);
    }
    public function listRepoEvents(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoEvents($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function listRepoNotificationsForAuthenticatedUser(string $owner, string $repo, bool $all = false, bool $participating = false, string $since, string $before, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $all, $participating, $since, $before, $per_page, $page);
    }
    public function markRepoNotificationsAsRead(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listStargazersForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListStargazersForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListStargazersForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function listWatchersForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchersForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchersForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function getRepoSubscription(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function setRepoSubscription(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function deleteRepoSubscription(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listReposStarredByAuthenticatedUser(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $sort, $direction, $per_page, $page);
    }
    public function checkRepoIsStarredByAuthenticatedUser(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function starRepoForAuthenticatedUser(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\StarRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\StarRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function unstarRepoForAuthenticatedUser(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\UnstarRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\UnstarRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listWatchedReposForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function listEventsForAuthenticatedUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListEventsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListEventsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $per_page, $page);
    }
    public function listOrgEventsForAuthenticatedUser(string $username, string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListOrgEventsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListOrgEventsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $org, $per_page, $page);
    }
    public function listPublicEventsForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEventsForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $per_page, $page);
    }
    public function listReceivedEventsForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedEventsForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedEventsForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $per_page, $page);
    }
    public function listReceivedPublicEventsForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedPublicEventsForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReceivedPublicEventsForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $per_page, $page);
    }
    public function listReposStarredByUser(string $username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposStarredByUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $sort, $direction, $per_page, $page);
    }
    public function listReposWatchedByUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposWatchedByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListReposWatchedByUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $per_page, $page);
    }
}
