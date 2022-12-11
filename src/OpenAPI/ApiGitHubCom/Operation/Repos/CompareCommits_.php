<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CompareCommits_
{
    private const OPERATION_ID = 'repos/compare-commits';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**The base branch and head branch to compare. This parameter expects the format `{base}...{head}`.**/
    private readonly string $basehead;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $page = 1, int $per_page = 30, string $basehead)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->basehead = $basehead;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{page}', '{per_page}', '{basehead}'), array($this->owner, $this->repo, $this->page, $this->per_page, $this->basehead), '/repos/{owner}/{repo}/compare/{basehead}?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
