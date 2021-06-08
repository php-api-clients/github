<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetTag
{
    private const OPERATION_ID = 'git/get-tag';
    public string $owner;
    public string $repo;
    public string $tag_sha;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $tag_sha)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->tag_sha = $tag_sha;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{tag_sha}'], [$this->owner, $this->repo, $this->tag_sha], '/repos/{owner}/{repo}/git/tags/{tag_sha}?'));
    }

    function validateResponse(): void
    {
    }
}
