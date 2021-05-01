<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListJobsForWorkflowRun
{
    private const OPERATION_ID = 'actions/list-jobs-for-workflow-run';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The id of the workflow run**/
    public int $run_id;
    /**Filters jobs by their `completed_at` timestamp. Can be one of:  
    \* `latest`: Returns jobs from the most recent execution of the workflow run.  
    \* `all`: Returns all jobs for a workflow run, including from old executions of the workflow run.**/
    public string $filter;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->run_id, $this->filter, $this->per_page, $this->page), '/repos/{owner}/{repo}/actions/runs/{run_id}/jobs?filter={filter}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
