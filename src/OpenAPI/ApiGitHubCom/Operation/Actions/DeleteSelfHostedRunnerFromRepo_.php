<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class DeleteSelfHostedRunnerFromRepo_
{
    private const OPERATION_ID = 'actions/delete-self-hosted-runner-from-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private readonly int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $runner_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{runner_id}'), array($this->owner, $this->repo, $this->runner_id), '/repos/{owner}/{repo}/actions/runners/{runner_id}'));
    }
    function validateResponse()
    {
    }
}
