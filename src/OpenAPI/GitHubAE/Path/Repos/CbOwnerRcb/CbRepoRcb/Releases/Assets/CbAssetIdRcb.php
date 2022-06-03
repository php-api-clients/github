<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets;

final class CbAssetIdRcb
{
    function get($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseAsset($owner, $repo, $asset_id);
    }
    function delete($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteReleaseAsset($owner, $repo, $asset_id);
    }
    function patch($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateReleaseAsset($owner, $repo, $asset_id);
    }
}
