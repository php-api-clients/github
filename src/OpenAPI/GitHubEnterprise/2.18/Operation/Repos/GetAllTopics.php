<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Repos;

final class GetAllTopics
{
    private const OPERATION_ID = 'repos/get-all-topics';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, int $page = 1, int $per_page = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->page, $this->per_page), '/repos/{owner}/{repo}/topics?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
