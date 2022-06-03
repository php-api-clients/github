<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

final class GetJobForWorkflowRun_
{
    private const OPERATION_ID = 'actions/get-job-for-workflow-run';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**job_id parameter**/
    public int $job_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $job_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->job_id = $job_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{job_id}'), array($this->owner, $this->repo, $this->job_id), '/repos/{owner}/{repo}/actions/jobs/{job_id}?'));
    }
    function validateResponse()
    {
    }
}
