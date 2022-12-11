<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks;

final class Update_
{
    private const OPERATION_ID = 'checks/update';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the check run.**/
    private readonly int $check_run_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $check_run_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_run_id = $check_run_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{check_run_id}'), array($this->owner, $this->repo, $this->check_run_id), '/repos/{owner}/{repo}/check-runs/{check_run_id}'));
    }
    function validateResponse()
    {
    }
}
