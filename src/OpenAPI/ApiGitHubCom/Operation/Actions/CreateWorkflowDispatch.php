<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class CreateWorkflowDispatch
{
    private const OPERATION_ID = 'actions/create-workflow-dispatch';
    /****/
    public string $owner;
    /****/
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflow_id), '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches?'));
    }
    function validateResponse()
    {
    }
}
