<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg;

final class Versions
{
    function get($package_type, $package_name, $org, int $page = 1, int $per_page = 30, string $state = 'active'): GetAllPackageVersionsForPackageOwnedByOrg
    {
        return new GetAllPackageVersionsForPackageOwnedByOrg($package_type, $package_name, $org, $page, $per_page, $state);
    }
}
