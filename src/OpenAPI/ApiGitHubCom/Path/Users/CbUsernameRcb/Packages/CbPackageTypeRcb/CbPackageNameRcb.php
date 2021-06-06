<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser($package_type, $package_name, $username);
    }
}
