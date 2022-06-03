<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class ListForRepo_
{
    private const OPERATION_ID = 'projects/list-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->state, $this->per_page, $this->page), '/repos/{owner}/{repo}/projects?state={state}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
