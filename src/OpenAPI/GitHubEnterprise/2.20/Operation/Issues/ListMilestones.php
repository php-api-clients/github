<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Issues;

final class ListMilestones
{
    private const OPERATION_ID = 'issues/list-milestones';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The state of the milestone. Either `open`, `closed`, or `all`.**/
    public string $state;
    /**What to sort results by. Either `due_on` or `completeness`.**/
    public string $sort;
    /**The direction of the sort. Either `asc` or `desc`.**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->state, $this->sort, $this->direction, $this->per_page, $this->page), '/repos/{owner}/{repo}/milestones?state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
