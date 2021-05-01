<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects;

final class GetPermissionForUser
{
    private const OPERATION_ID = 'projects/get-permission-for-user';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{project_id}', '{username}'), array($this->project_id, $this->username), '/projects/{project_id}/collaborators/{username}/permission?'));
    }
    function validateResponse()
    {
    }
}
