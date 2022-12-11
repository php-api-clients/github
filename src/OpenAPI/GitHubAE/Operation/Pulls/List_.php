<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls;

final class List_
{
    private const OPERATION_ID = 'pulls/list';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Either `open`, `closed`, or `all` to filter by state.**/
    private readonly string $state;
    /**Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.**/
    private readonly string $head;
    /**Filter pulls by base branch name. Example: `gh-pages`.**/
    private readonly string $base;
    /**What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.**/
    private readonly string $sort;
    /**The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $state = 'open', string $head, string $base, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1)
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
