<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks;

final class Update_
{
    private const OPERATION_ID = 'checks/update';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{check_run_id}'), array($this->owner, $this->repo, $this->check_run_id), '/repos/{owner}/{repo}/check-runs/{check_run_id}?'));
    }
    function validateResponse()
    {
    }
}
