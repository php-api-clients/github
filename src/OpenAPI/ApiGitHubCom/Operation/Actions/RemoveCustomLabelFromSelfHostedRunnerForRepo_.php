<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class RemoveCustomLabelFromSelfHostedRunnerForRepo_
{
    private const OPERATION_ID = 'actions/remove-custom-label-from-self-hosted-runner-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private readonly int $runner_id;
    /**The name of a self-hosted runner's custom label.**/
    private readonly string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $runner_id, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runner_id;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{runner_id}', '{name}'), array($this->owner, $this->repo, $this->runner_id, $this->name), '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}'));
    }
    function validateResponse()
    {
    }
}
