<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class ListColumns_
{
    private const OPERATION_ID = 'projects/list-columns';
    /**The unique identifier of the project.**/
    public int $project_id;
    /**The number of results per page (max 100).**/
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
