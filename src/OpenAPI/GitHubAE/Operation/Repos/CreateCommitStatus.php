<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateCommitStatus
{
    private const OPERATION_ID = 'repos/create-commit-status';
    public string $owner;
    public string $repo;
    public string $sha;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $sha)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->sha   = $sha;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{sha}'], [$this->owner, $this->repo, $this->sha], '/repos/{owner}/{repo}/statuses/{sha}?'));
    }

    function validateResponse(): void
    {
    }
}
