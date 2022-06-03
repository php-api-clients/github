<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

final class UpdateReleaseAsset_
{
    private const OPERATION_ID = 'repos/update-release-asset';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**asset_id parameter**/
    public int $asset_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $asset_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->asset_id = $asset_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{asset_id}'), array($this->owner, $this->repo, $this->asset_id), '/repos/{owner}/{repo}/releases/assets/{asset_id}?'));
    }
    function validateResponse()
    {
    }
}
