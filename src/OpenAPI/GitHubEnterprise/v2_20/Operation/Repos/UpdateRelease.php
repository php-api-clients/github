<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateRelease
{
    private const OPERATION_ID = 'repos/update-release';
    public string $owner;
    public string $repo;
    /**release_id parameter**/
    public int $release_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $release_id)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->release_id = $release_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{owner}', '{repo}', '{release_id}'], [$this->owner, $this->repo, $this->release_id], '/repos/{owner}/{repo}/releases/{release_id}?'));
    }

    function validateResponse(): void
    {
    }
}
