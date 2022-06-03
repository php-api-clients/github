<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

final class Assets
{
    function get($owner, $repo, $release_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListReleaseAssets
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListReleaseAssets($owner, $repo, $release_id, $per_page, $page);
    }
    function post($owner, $repo, $release_id, $name, $label) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UploadReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UploadReleaseAsset($owner, $repo, $release_id, $name, $label);
    }
}
