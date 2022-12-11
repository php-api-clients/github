<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetReleaseAsset_
{
    private const OPERATION_ID = 'repos/get-release-asset';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the asset.**/
    private readonly int $asset_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $asset_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->asset_id = $asset_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{asset_id}'), array($this->owner, $this->repo, $this->asset_id), '/repos/{owner}/{repo}/releases/assets/{asset_id}'));
    }
    function validateResponse()
    {
    }
}
