<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Versions
{
    function get($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUserOperation($package_type, $package_name, $username);
    }
}
