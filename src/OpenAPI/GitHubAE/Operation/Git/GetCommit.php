<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetCommit
{
    private const OPERATION_ID = 'git/get-commit';
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
        return new Request('get', str_replace(['{owner}', '{repo}', '{commit_sha}'], [$this->owner, $this->repo, $this->commit_sha], '/repos/{owner}/{repo}/git/commits/{commit_sha}?'));
    }

    function validateResponse(): void
    {
    }
}
