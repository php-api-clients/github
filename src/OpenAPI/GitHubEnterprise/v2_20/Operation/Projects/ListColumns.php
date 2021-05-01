<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects;

final class ListColumns
{
    private const OPERATION_ID = 'projects/list-columns';
    /****/
    public int $project_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($project_id, int $per_page = 30, int $page = 1)
    {
        $this->project_id = $project_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{project_id}', '{per_page}', '{page}'), array($this->project_id, $this->per_page, $this->page), '/projects/{project_id}/columns?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
