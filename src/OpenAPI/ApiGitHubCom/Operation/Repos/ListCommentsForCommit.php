<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListCommentsForCommit
{
    private const OPERATION_ID = 'repos/list-comments-for-commit';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**commit_sha parameter**/
    public string $commit_sha;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->commit_sha = $commit_sha;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{commit_sha}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->commit_sha, $this->per_page, $this->page), '/repos/{owner}/{repo}/commits/{commit_sha}/comments?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
