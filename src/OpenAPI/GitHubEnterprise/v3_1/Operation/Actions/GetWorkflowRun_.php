<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class GetWorkflowRun_
{
    private const OPERATION_ID = 'actions/get-workflow-run';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the workflow run.**/
    private readonly int $run_id;
    /**If `true` pull requests are omitted from the response (empty array).**/
    private readonly bool $exclude_pull_requests;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $run_id, bool $exclude_pull_requests = false)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
        $this->exclude_pull_requests = $exclude_pull_requests;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}', '{exclude_pull_requests}'), array($this->owner, $this->repo, $this->run_id, $this->exclude_pull_requests), '/repos/{owner}/{repo}/actions/runs/{run_id}?exclude_pull_requests={exclude_pull_requests}'));
    }
    function validateResponse()
    {
    }
}
