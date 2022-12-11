<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListCollaborators_
{
    private const OPERATION_ID = 'repos/list-collaborators';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Filter collaborators returned by their affiliation. `outside` means all outside collaborators of an organization-owned repository. `direct` means all collaborators with permissions to an organization-owned repository, regardless of organization membership status. `all` means all collaborators the authenticated user can see.**/
    private readonly string $affiliation;
    /**Filter collaborators by the permissions they have on the repository. If not specified, all collaborators will be returned.**/
    private readonly string $permission;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $affiliation = 'all', string $permission, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->affiliation = $affiliation;
        $this->permission = $permission;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{affiliation}', '{permission}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->affiliation, $this->permission, $this->per_page, $this->page), '/repos/{owner}/{repo}/collaborators?affiliation={affiliation}&permission={permission}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
