<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

final class Assets
{
    function get($owner, $repo, $release_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListReleaseAssetsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListReleaseAssetsOperation($owner, $repo, $release_id, $per_page, $page);
    }
    function post($owner, $repo, $release_id, $name, $label) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\UploadReleaseAssetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\UploadReleaseAssetOperation($owner, $repo, $release_id, $name, $label);
    }
}
