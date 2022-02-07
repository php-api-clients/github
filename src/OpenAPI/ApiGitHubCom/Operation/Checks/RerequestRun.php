<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks;

final class RerequestRun
{
    private const OPERATION_ID = 'checks/rerequest-run';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**check_run_id parameter**/
    public int $check_run_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $check_run_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_run_id = $check_run_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{check_run_id}'), array($this->owner, $this->repo, $this->check_run_id), '/repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest?'));
    }
    function validateResponse()
    {
    }
}
