<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

final class ListForks_
{
    private const OPERATION_ID = 'repos/list-forks';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The sort order. Can be either `newest`, `oldest`, or `stargazers`.**/
    public string $sort;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $sort = 'newest', int $per_page = 30, int $page = 1)
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
