<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CreateCommitComment_
{
    private const OPERATION_ID = 'repos/create-commit-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The SHA of the commit.**/
    private readonly string $commit_sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $commit_sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->commit_sha = $commit_sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{commit_sha}'), array($this->owner, $this->repo, $this->commit_sha), '/repos/{owner}/{repo}/commits/{commit_sha}/comments'));
    }
    function validateResponse()
    {
    }
}
