<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

final class AddCollaborator
{
    private const OPERATION_ID = 'projects/add-collaborator';
    /****/
    public int $project_id;
    /****/
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{project_id}', '{username}'), array($this->project_id, $this->username), '/projects/{project_id}/collaborators/{username}?'));
    }
    function validateResponse()
    {
    }
}
