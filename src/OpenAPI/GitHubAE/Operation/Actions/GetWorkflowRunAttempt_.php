<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class GetWorkflowRunAttempt_
{
    private const OPERATION_ID = 'actions/get-workflow-run-attempt';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the workflow run.**/
    private readonly int $run_id;
    /**The attempt number of the workflow run.**/
    private readonly int $attempt_number;
    /**If `true` pull requests are omitted from the response (empty array).**/
    private readonly bool $exclude_pull_requests;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $run_id, int $attempt_number, bool $exclude_pull_requests = false)
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
