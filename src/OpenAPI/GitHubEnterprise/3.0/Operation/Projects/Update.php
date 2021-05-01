<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Projects;

final class Update
{
    private const OPERATION_ID = 'projects/update';
    /****/
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
