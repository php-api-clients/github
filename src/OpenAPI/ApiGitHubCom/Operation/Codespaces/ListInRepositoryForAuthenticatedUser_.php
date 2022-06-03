<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class ListInRepositoryForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/list-in-repository-for-authenticated-user';
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, $owner, $repo)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{owner}', '{repo}'), array($this->per_page, $this->page, $this->owner, $this->repo), '/repos/{owner}/{repo}/codespaces?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
