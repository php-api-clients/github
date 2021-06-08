<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DownloadZipballArchive
{
    private const OPERATION_ID = 'repos/download-zipball-archive';
    public string $owner;
    public string $repo;
    public string $ref;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $ref)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->ref   = $ref;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{ref}'], [$this->owner, $this->repo, $this->ref], '/repos/{owner}/{repo}/zipball/{ref}?'));
    }

    function validateResponse(): void
    {
    }
}
