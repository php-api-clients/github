<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb;

final class Restore
{
    function post($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageVersionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageVersionForAuthenticatedUserOperation($package_type, $package_name, $package_version_id);
    }
}
