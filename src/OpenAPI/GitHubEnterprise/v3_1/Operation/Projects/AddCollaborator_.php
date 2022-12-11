<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

final class AddCollaborator_
{
    private const OPERATION_ID = 'projects/add-collaborator';
    /**The unique identifier of the project.**/
    private readonly int $project_id;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $project_id, string $username)
    {
        $this->project_id = $project_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{project_id}', '{username}'), array($this->project_id, $this->username), '/projects/{project_id}/collaborators/{username}'));
    }
    function validateResponse()
    {
    }
}
