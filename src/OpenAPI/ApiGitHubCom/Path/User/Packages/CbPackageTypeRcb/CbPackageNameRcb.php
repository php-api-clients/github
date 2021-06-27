<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb;

final class CbPackageNameRcb
{
    function get($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser($package_type, $package_name);
    }
    function delete($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser($package_type, $package_name);
    }
}
