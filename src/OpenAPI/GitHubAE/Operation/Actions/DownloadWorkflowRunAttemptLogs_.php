<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class DownloadWorkflowRunAttemptLogs_
{
    private const OPERATION_ID = 'actions/download-workflow-run-attempt-logs';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the workflow run.**/
    public int $run_id;
    /**The attempt number of the workflow run.**/
    public int $attempt_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id, $attempt_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->attempt_number = $attempt_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{attempt_number}'), array($this->owner, $this->repo, $this->run_id, $this->attempt_number), '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs?'));
    }
    function validateResponse()
    {
    }
}
