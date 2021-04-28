<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $org) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForOrganizationOperation($package_type, $package_name, $org);
    }
    function delete($package_type, $package_name, $org) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageForOrgOperation($package_type, $package_name, $org);
    }
}
