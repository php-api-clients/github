<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

final class RemoveCollaborator_
{
    private const OPERATION_ID = 'projects/remove-collaborator';
    /**The unique identifier of the project.**/
    public int $project_id;
    /**The handle for the GitHub user account.**/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($project_id, $username)
    {
        $this->project_id = $project_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{project_id}', '{username}'), array($this->project_id, $this->username), '/projects/{project_id}/collaborators/{username}?'));
    }
    function validateResponse()
    {
    }
}
