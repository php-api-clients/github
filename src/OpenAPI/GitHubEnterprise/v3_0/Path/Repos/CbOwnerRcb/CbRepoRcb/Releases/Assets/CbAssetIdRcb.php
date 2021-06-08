<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteReleaseAsset;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetReleaseAsset;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\UpdateReleaseAsset;

final class CbAssetIdRcb
{
    function get($owner, $repo, $asset_id): GetReleaseAsset
    {
        return new GetReleaseAsset($owner, $repo, $asset_id);
    }

    function delete($owner, $repo, $asset_id): DeleteReleaseAsset
    {
        return new DeleteReleaseAsset($owner, $repo, $asset_id);
    }

    function patch($owner, $repo, $asset_id): UpdateReleaseAsset
    {
        return new UpdateReleaseAsset($owner, $repo, $asset_id);
    }
}
