<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CompareCommits
{
    private const OPERATION_ID = 'repos/compare-commits';
    public string $owner;
    public string $repo;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100)**/
    public int $per_page;
    /**The base branch and head branch to compare. This parameter expects the format `{base}...{head}`.**/
    public string $basehead;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, int $page = 1, int $per_page = 30, $basehead)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->page     = $page;
        $this->per_page = $per_page;
        $this->basehead = $basehead;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{page}', '{per_page}', '{basehead}'], [$this->owner, $this->repo, $this->page, $this->per_page, $this->basehead], '/repos/{owner}/{repo}/compare/{basehead}?page={page}&per_page={per_page}'));
    }

    function validateResponse(): void
    {
    }
}
