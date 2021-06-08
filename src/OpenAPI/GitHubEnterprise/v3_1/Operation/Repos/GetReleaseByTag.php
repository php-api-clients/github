<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetReleaseByTag
{
    private const OPERATION_ID = 'repos/get-release-by-tag';
    public string $owner;
    public string $repo;
    /**tag parameter**/
    public string $tag;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $tag)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->tag   = $tag;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{tag}'], [$this->owner, $this->repo, $this->tag], '/repos/{owner}/{repo}/releases/tags/{tag}?'));
    }

    function validateResponse(): void
    {
    }
}
