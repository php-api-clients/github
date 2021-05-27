<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets;

final class CbAssetIdRcb
{
    function get($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAssetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAssetOperation($owner, $repo, $asset_id);
    }
    function delete($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAssetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAssetOperation($owner, $repo, $asset_id);
    }
    function patch($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAssetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAssetOperation($owner, $repo, $asset_id);
    }
}
