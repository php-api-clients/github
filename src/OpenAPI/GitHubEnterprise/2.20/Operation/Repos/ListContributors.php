<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Repos;

final class ListContributors
{
    private const OPERATION_ID = 'repos/list-contributors';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Set to `1` or `true` to include anonymous contributors in results.**/
    public string $anon;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $anon, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->anon = $anon;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{anon}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->anon, $this->per_page, $this->page), '/repos/{owner}/{repo}/contributors?anon={anon}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
