<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph;

final class DiffRange_
{
    private const OPERATION_ID = 'dependency-graph/diff-range';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The base and head Git revisions to compare. The Git revisions will be resolved to commit SHAs. Named revisions will be resolved to their corresponding HEAD commits, and an appropriate merge base will be determined. This parameter expects the format `{base}...{head}`.**/
    private readonly string $basehead;
    /**The full path, relative to the repository root, of the dependency manifest file.**/
    private readonly string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $basehead, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->basehead = $basehead;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{basehead}', '{name}'), array($this->owner, $this->repo, $this->basehead, $this->name), '/repos/{owner}/{repo}/dependency-graph/compare/{basehead}?name={name}'));
    }
    function validateResponse()
    {
    }
}
