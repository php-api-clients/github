<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetReleaseAsset
{
    private const OPERATION_ID = 'repos/get-release-asset';
    public string $owner;
    public string $repo;
    /**asset_id parameter**/
    public int $asset_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $asset_id)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->asset_id = $asset_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{asset_id}'], [$this->owner, $this->repo, $this->asset_id], '/repos/{owner}/{repo}/releases/assets/{asset_id}?'));
    }

    function validateResponse(): void
    {
    }
}
