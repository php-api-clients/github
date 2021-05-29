<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CompareCommits
{
    private const OPERATION_ID = 'repos/compare-commits';
    public string $owner;
    public string $repo;
    /**The base branch and head branch to compare. This parameter expects the format `{base}...{head}`.**/
    public string $basehead;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $basehead)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->basehead = $basehead;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{basehead}'], [$this->owner, $this->repo, $this->basehead], '/repos/{owner}/{repo}/compare/{basehead}?'));
    }

    function validateResponse(): void
    {
    }
}
