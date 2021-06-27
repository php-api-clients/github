<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Versions
{
    function get($package_type, $package_name, $org, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg($package_type, $package_name, $org, $page, $per_page, $state);
    }
}
