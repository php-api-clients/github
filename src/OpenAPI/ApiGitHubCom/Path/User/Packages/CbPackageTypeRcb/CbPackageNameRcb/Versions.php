<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserOperation;

final class Versions
{
    function get($package_type, $package_name, int $page = 1, int $per_page = 30, string $state = 'active'): GetAllPackageVersionsForPackageOwnedByAuthenticatedUserOperation
    {
        return new GetAllPackageVersionsForPackageOwnedByAuthenticatedUserOperation($package_type, $package_name, $page, $per_page, $state);
    }
}
