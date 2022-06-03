<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

final class ListCollaborators_
{
    private const OPERATION_ID = 'repos/list-collaborators';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Filter collaborators returned by their affiliation. Can be one of:  
    \* `outside`: All outside collaborators of an organization-owned repository.  
    \* `direct`: All collaborators with permissions to an organization-owned repository, regardless of organization membership status.  
    \* `all`: All collaborators the authenticated user can see.**/
    public string $affiliation;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->affiliation = $affiliation;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{affiliation}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->affiliation, $this->per_page, $this->page), '/repos/{owner}/{repo}/collaborators?affiliation={affiliation}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
