<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class DisableWorkflow_
{
    private const OPERATION_ID = 'actions/disable-workflow';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    public $workflow_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $workflow_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflow_id = $workflow_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflow_id), '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable?'));
    }
    function validateResponse()
    {
    }
}
