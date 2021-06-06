<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Versions
{
    function get($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser($package_type, $package_name, $username);
    }
}
