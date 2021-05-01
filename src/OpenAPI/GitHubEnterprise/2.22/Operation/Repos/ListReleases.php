<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos;

final class ListReleases
{
    private const OPERATION_ID = 'repos/list-releases';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->per_page, $this->page), '/repos/{owner}/{repo}/releases?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
