<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

final class ListPreReceiveHooksForRepo_
{
    private const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks-for-repo';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /****/
    public string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per_page}', '{page}', '{direction}', '{sort}'), array($this->owner, $this->repo, $this->per_page, $this->page, $this->direction, $this->sort), '/repos/{owner}/{repo}/pre-receive-hooks?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
