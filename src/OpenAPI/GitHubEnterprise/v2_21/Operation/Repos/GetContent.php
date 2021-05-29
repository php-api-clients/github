<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetContent
{
    private const OPERATION_ID = 'repos/get-content';
    public string $owner;
    public string $repo;
    /**path parameter**/
    public string $path;
    /**The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)**/
    public string $ref;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $path, $ref)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->path  = $path;
        $this->ref   = $ref;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{path}', '{ref}'], [$this->owner, $this->repo, $this->path, $this->ref], '/repos/{owner}/{repo}/contents/{path}?ref={ref}'));
    }

    function validateResponse(): void
    {
    }
}
