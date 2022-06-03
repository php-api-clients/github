<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListJobsForWorkflowRun_
{
    private const OPERATION_ID = 'actions/list-jobs-for-workflow-run';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the workflow run.**/
    public int $run_id;
    /**Filters jobs by their `completed_at` timestamp. `latest` returns jobs from the most recent execution of the workflow run. `all` returns all jobs for a workflow run, including from old executions of the workflow run.**/
    public string $filter;
    /**The number of results per page (max 100).**/
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
