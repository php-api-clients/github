<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class CreateCommitStatus
{
    private const OPERATION_ID = 'repos/create-commit-status';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public string $sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{sha}'), array($this->owner, $this->repo, $this->sha), '/repos/{owner}/{repo}/statuses/{sha}?'));
    }
    function validateResponse()
    {
    }
}
