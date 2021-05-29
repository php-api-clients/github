<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAssetOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAssetOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAssetOperation;

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
