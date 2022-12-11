<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class ListForks_
{
    private const OPERATION_ID = 'repos/list-forks';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The sort order. `stargazers` will sort by star count.**/
    private readonly string $sort;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $sort = 'newest', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sort = $sort;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{sort}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sort, $this->per_page, $this->page), '/repos/{owner}/{repo}/forks?sort={sort}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
