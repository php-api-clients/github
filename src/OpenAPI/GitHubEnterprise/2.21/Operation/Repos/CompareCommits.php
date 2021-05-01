<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos;

final class CompareCommits
{
    private const OPERATION_ID = 'repos/compare-commits';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The base branch and head branch to compare. This parameter expects the format `{base}...{head}`.**/
    public string $basehead;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $basehead)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->basehead = $basehead;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{basehead}'), array($this->owner, $this->repo, $this->basehead), '/repos/{owner}/{repo}/compare/{basehead}?'));
    }
    function validateResponse()
    {
    }
}
