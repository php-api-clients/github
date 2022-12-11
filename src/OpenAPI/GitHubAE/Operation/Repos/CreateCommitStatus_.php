<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class CreateCommitStatus_
{
    private const OPERATION_ID = 'repos/create-commit-status';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    private readonly string $sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{sha}'), array($this->owner, $this->repo, $this->sha), '/repos/{owner}/{repo}/statuses/{sha}'));
    }
    function validateResponse()
    {
    }
}
