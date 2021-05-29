<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetBlob
{
    private const OPERATION_ID = 'git/get-blob';
    public string $owner;
    public string $repo;
    public string $file_sha;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $file_sha)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->file_sha = $file_sha;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{file_sha}'], [$this->owner, $this->repo, $this->file_sha], '/repos/{owner}/{repo}/git/blobs/{file_sha}?'));
    }

    function validateResponse(): void
    {
    }
}
