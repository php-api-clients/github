<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class GetJobForWorkflowRun_
{
    private const OPERATION_ID = 'actions/get-job-for-workflow-run';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the job.**/
    private readonly int $job_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $job_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->job_id = $job_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->job_id), '/repos/{owner}/{repo}/actions/jobs/{job_id}'));
    }
    function validateResponse()
    {
    }
}
