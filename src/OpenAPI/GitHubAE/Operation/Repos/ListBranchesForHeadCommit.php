<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class ListBranchesForHeadCommit
{
    private const OPERATION_ID = 'repos/list-branches-for-head-commit';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**commit_sha parameter**/
    public string $commit_sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $commit_sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->commit_sha = $commit_sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{commit_sha}'), array($this->owner, $this->repo, $this->commit_sha), '/repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head?'));
    }
    function validateResponse()
    {
    }
}
