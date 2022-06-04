<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects;

final class CreateColumn_
{
    private const OPERATION_ID = 'projects/create-column';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/columns'));
    }
    function validateResponse()
    {
    }
}
