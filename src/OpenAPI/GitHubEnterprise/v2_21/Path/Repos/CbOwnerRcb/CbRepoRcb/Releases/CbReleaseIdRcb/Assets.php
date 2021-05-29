<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListReleaseAssetsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\UploadReleaseAssetOperation;

final class Assets
{
    function get($owner, $repo, $release_id, int $per_page = 30, int $page = 1): ListReleaseAssetsOperation
    {
        return new ListReleaseAssetsOperation($owner, $repo, $release_id, $per_page, $page);
    }

    function post($owner, $repo, $release_id, $name, $label): UploadReleaseAssetOperation
    {
        return new UploadReleaseAssetOperation($owner, $repo, $release_id, $name, $label);
    }
}
