<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListRunnerApplicationsForRepo_
{
    private const OPERATION_ID = 'actions/list-runner-applications-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/actions/runners/downloads?'));
    }
    function validateResponse()
    {
    }
}
