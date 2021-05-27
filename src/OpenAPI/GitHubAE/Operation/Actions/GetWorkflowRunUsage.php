<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class GetWorkflowRunUsage
{
    private const OPERATION_ID = 'actions/get-workflow-run-usage';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The id of the workflow run.**/
    public int $run_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $run_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $run_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{run_id}'), array($this->owner, $this->repo, $this->run_id), '/repos/{owner}/{repo}/actions/runs/{run_id}/timing?'));
    }
    function validateResponse()
    {
    }
}
