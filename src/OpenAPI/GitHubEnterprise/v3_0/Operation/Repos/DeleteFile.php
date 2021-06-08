<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteFile
{
    private const OPERATION_ID = 'repos/delete-file';
    public string $owner;
    public string $repo;
    /**path parameter**/
    public string $path;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $path)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->path  = $path;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{path}'], [$this->owner, $this->repo, $this->path], '/repos/{owner}/{repo}/contents/{path}?'));
    }

    function validateResponse(): void
    {
    }
}
