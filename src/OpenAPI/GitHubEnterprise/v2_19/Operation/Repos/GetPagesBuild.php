<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetPagesBuild
{
    private const OPERATION_ID = 'repos/get-pages-build';
    public string $owner;
    public string $repo;
    public int $build_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $build_id)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->build_id = $build_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{build_id}'], [$this->owner, $this->repo, $this->build_id], '/repos/{owner}/{repo}/pages/builds/{build_id}?'));
    }

    function validateResponse(): void
    {
    }
}
