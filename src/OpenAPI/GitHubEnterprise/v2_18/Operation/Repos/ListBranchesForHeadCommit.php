<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListBranchesForHeadCommit
{
    private const OPERATION_ID = 'repos/list-branches-for-head-commit';
    public string $owner;
    public string $repo;
    /**commit_sha parameter**/
    public string $commit_sha;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $commit_sha)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->commit_sha = $commit_sha;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{commit_sha}'], [$this->owner, $this->repo, $this->commit_sha], '/repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head?'));
    }

    function validateResponse(): void
    {
    }
}
