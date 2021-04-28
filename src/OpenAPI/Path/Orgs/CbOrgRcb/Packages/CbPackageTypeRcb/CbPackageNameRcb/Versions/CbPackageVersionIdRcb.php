<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForOrganizationOperation($package_type, $package_name, $org, $package_version_id);
    }
    function delete($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageVersionForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageVersionForOrgOperation($package_type, $package_name, $org, $package_version_id);
    }
}
