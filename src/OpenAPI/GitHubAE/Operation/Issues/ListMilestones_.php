<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

final class ListMilestones_
{
    private const OPERATION_ID = 'issues/list-milestones';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The state of the milestone. Either `open`, `closed`, or `all`.**/
    private readonly string $state;
    /**What to sort results by. Either `due_on` or `completeness`.**/
    private readonly string $sort;
    /**The direction of the sort. Either `asc` or `desc`.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1)
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
