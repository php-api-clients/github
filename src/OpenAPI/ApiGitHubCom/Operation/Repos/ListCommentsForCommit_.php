<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListCommentsForCommit_
{
    private const OPERATION_ID = 'repos/list-comments-for-commit';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The SHA of the commit.**/
    public string $commit_sha;
    /**The number of results per page (max 100).**/
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
