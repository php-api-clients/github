<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity;

final class ListRepoNotificationsForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/list-repo-notifications-for-authenticated-user';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**If `true`, show notifications marked as read.**/
    public bool $all;
    /**If `true`, only shows notifications in which the user is directly participating or mentioned.**/
    public bool $participating;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $before;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->all = $all;
        $this->participating = $participating;
        $this->since = $since;
        $this->before = $before;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{all}', '{participating}', '{since}', '{before}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->all, $this->participating, $this->since, $this->before, $this->per_page, $this->page), '/repos/{owner}/{repo}/notifications?all={all}&participating={participating}&since={since}&before={before}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
