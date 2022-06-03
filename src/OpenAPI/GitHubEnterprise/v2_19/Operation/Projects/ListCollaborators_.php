<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects;

final class ListCollaborators_
{
    private const OPERATION_ID = 'projects/list-collaborators';
    /****/
    public int $project_id;
    /**Filters the collaborators by their affiliation. Can be one of:  
    \* `outside`: Outside collaborators of a project that are not a member of the project's organization.  
    \* `direct`: Collaborators with permissions to a project, regardless of organization membership status.  
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
    function __construct($project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1)
    {
        $this->project_id = $project_id;
        $this->affiliation = $affiliation;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{project_id}', '{affiliation}', '{per_page}', '{page}'), array($this->project_id, $this->affiliation, $this->per_page, $this->page), '/projects/{project_id}/collaborators?affiliation={affiliation}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
