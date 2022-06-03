<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListJobsForWorkflowRunAttempt_
{
    private const OPERATION_ID = 'actions/list-jobs-for-workflow-run-attempt';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the workflow run.**/
    public int $run_id;
    /**The attempt number of the workflow run.**/
    public int $attempt_number;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id, $attempt_number, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->attempt_number = $attempt_number;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{attempt_number}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->run_id, $this->attempt_number, $this->per_page, $this->page), '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
