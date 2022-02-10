<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListAutolinks
{
    private const OPERATION_ID = 'repos/list-autolinks';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{page}'), array($this->owner, $this->repo, $this->page), '/repos/{owner}/{repo}/autolinks?page={page}'));
    }
    function validateResponse()
    {
    }
}
