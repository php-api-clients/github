<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\DeleteReleaseAssetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetReleaseAssetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\UpdateReleaseAssetOperation;

final class CbAssetIdRcb
{
    function get($owner, $repo, $asset_id): GetReleaseAssetOperation
    {
        return new GetReleaseAssetOperation($owner, $repo, $asset_id);
    }

    function delete($owner, $repo, $asset_id): DeleteReleaseAssetOperation
    {
        return new DeleteReleaseAssetOperation($owner, $repo, $asset_id);
    }

    function patch($owner, $repo, $asset_id): UpdateReleaseAssetOperation
    {
        return new UpdateReleaseAssetOperation($owner, $repo, $asset_id);
    }
}
