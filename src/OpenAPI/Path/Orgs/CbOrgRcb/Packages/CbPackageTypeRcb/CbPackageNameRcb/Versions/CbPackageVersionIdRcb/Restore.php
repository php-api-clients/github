<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb;

final class Restore
{
    function post($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageVersionForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageVersionForOrgOperation($package_type, $package_name, $org, $package_version_id);
    }
}
