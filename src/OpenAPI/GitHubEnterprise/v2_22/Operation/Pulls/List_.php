<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls;

final class List_
{
    private const OPERATION_ID = 'pulls/list';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Either `open`, `closed`, or `all` to filter by state.**/
    public string $state;
    /**Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.**/
    public string $head;
    /**Filter pulls by base branch name. Example: `gh-pages`.**/
    public string $base;
    /**What to sort results by. Can be either `created`, `updated`, `popularity` (comment count) or `long-running` (age, filtering by pulls updated in the last month).**/
    public string $sort;
    /**The direction of the sort. Can be either `asc` or `desc`. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.**/
    public string $direction;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $state = 'open', $head, $base, string $sort = 'created', $direction, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->head = $head;
        $this->base = $base;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{head}', '{base}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->state, $this->head, $this->base, $this->sort, $this->direction, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls?state={state}&head={head}&base={base}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
