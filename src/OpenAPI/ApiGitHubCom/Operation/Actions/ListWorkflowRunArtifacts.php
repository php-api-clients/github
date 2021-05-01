<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListWorkflowRunArtifacts
{
    private const OPERATION_ID = 'actions/list-workflow-run-artifacts';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The id of the workflow run**/
    public int $run_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->run_id, $this->per_page, $this->page), '/repos/{owner}/{repo}/actions/runs/{run_id}/artifacts?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
