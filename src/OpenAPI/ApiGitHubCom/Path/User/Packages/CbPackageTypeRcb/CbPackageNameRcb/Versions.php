<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Versions
{
    function get($package_type, $package_name, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($package_type, $package_name, $page, $per_page, $state);
    }
}
