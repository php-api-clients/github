<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DownloadTarballArchive
{
    private const OPERATION_ID = 'repos/download-tarball-archive';
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
        return new Request('get', str_replace(['{owner}', '{repo}', '{ref}'], [$this->owner, $this->repo, $this->ref], '/repos/{owner}/{repo}/tarball/{ref}?'));
    }

    function validateResponse(): void
    {
    }
}
