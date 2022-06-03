<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

final class GetCombinedStatusForRef_
{
    private const OPERATION_ID = 'repos/get-combined-status-for-ref';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**ref parameter**/
    public string $ref;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $ref, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->ref, $this->per_page, $this->page), '/repos/{owner}/{repo}/commits/{ref}/status?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
