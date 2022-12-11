<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListPreReceiveHooksForRepo_
{
    private const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    private readonly string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
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
