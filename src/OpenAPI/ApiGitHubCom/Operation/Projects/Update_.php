<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class Update_
{
    private const OPERATION_ID = 'projects/update';
    /**The unique identifier of the project.**/
    public int $project_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($project_id)
    {
        $this->project_id = $project_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}?'));
    }
    function validateResponse()
    {
    }
}
