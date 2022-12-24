<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Activity
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getFeeds_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listNotificationsForAuthenticatedUser_(bool $all = false, bool $participating = false, string $since, string $before, int $page = 1, int $per_page = 50) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListNotificationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListNotificationsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $all, $participating, $since, $before, $page, $per_page);
    }
    public function markNotificationsAsRead_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkNotificationsAsRead_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkNotificationsAsRead_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getThread_(int $thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThread_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThread_($this->requestSchemaValidator, $this->responseSchemaValidator, $thread_id);
    }
    public function markThreadAsRead_(int $thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkThreadAsRead_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkThreadAsRead_($this->requestSchemaValidator, $this->responseSchemaValidator, $thread_id);
    }
    public function getThreadSubscriptionForAuthenticatedUser_(int $thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $thread_id);
    }
    public function setThreadSubscription_(int $thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscription_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscription_($this->requestSchemaValidator, $this->responseSchemaValidator, $thread_id);
    }
    public function deleteThreadSubscription_(int $thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscription_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscription_($this->requestSchemaValidator, $this->responseSchemaValidator, $thread_id);
    }
    public function listRepoEvents_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoEvents_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoEvents_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function listRepoNotificationsForAuthenticatedUser_(string $owner, string $repo, bool $all = false, bool $participating = false, string $since, string $before, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoNotificationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoNotificationsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $all, $participating, $since, $before, $per_page, $page);
    }
    public function markRepoNotificationsAsRead_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkRepoNotificationsAsRead_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkRepoNotificationsAsRead_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listStargazersForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListStargazersForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListStargazersForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function listWatchersForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchersForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchersForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getRepoSubscription_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetRepoSubscription_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetRepoSubscription_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setRepoSubscription_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetRepoSubscription_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetRepoSubscription_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deleteRepoSubscription_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteRepoSubscription_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteRepoSubscription_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listReposStarredByAuthenticatedUser_(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $sort, $direction, $per_page, $page);
    }
    public function checkRepoIsStarredByAuthenticatedUser_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function starRepoForAuthenticatedUser_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function unstarRepoForAuthenticatedUser_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listWatchedReposForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchedReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchedReposForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function listEventsForAuthenticatedUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListEventsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListEventsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function listOrgEventsForAuthenticatedUser_(string $username, string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $org, $per_page, $page);
    }
    public function listReposStarredByUser_(string $username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $sort, $direction, $per_page, $page);
    }
    public function listReposWatchedByUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
}
