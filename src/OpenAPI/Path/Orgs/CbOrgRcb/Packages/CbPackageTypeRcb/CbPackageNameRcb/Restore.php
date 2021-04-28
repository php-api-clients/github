<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Restore
{
    function post($package_type, $package_name, $org, $token) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageForOrgOperation($package_type, $package_name, $org, $token);
    }
}
