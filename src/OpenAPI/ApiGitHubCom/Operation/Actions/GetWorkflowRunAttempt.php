<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetWorkflowRunAttempt
{
    private const OPERATION_ID = 'actions/get-workflow-run-attempt';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The id of the workflow run.**/
    public int $run_id;
    /**The attempt number of the workflow run.**/
    public int $attempt_number;
    /**If `true` pull requests are omitted from the response (empty array).**/
    public bool $exclude_pull_requests;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id, $attempt_number, bool $exclude_pull_requests = false)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->attempt_number = $attempt_number;
        $this->exclude_pull_requests = $exclude_pull_requests;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{attempt_number}', '{exclude_pull_requests}'), array($this->owner, $this->repo, $this->run_id, $this->attempt_number, $this->exclude_pull_requests), '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}?exclude_pull_requests={exclude_pull_requests}'));
    }
    function validateResponse()
    {
    }
}
