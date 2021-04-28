<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Versions
{
    function get($package_type, $package_name, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserOperation($package_type, $package_name, $page, $per_page, $state);
    }
}
