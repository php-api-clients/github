<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph;

final class CreateRepositorySnapshot_
{
    private const OPERATION_ID = 'dependency-graph/create-repository-snapshot';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/dependency-graph/snapshots'));
    }
    function validateResponse()
    {
    }
}
