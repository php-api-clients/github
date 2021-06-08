<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListReleaseAssets;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UploadReleaseAsset;

final class Assets
{
    function get($owner, $repo, $release_id, int $per_page = 30, int $page = 1): ListReleaseAssets
    {
        return new ListReleaseAssets($owner, $repo, $release_id, $per_page, $page);
    }

    function post($owner, $repo, $release_id, $name, $label): UploadReleaseAsset
    {
        return new UploadReleaseAsset($owner, $repo, $release_id, $name, $label);
    }
}
