<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Restore
{
    function post($package_type, $package_name, $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser($package_type, $package_name, $token);
    }
}
