<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser($package_type, $package_name, $package_version_id, $username);
    }
}
