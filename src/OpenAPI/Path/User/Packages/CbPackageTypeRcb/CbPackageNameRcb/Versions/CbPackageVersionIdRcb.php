<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForAuthenticatedUserOperation($package_type, $package_name, $package_version_id);
    }
    function delete($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageVersionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageVersionForAuthenticatedUserOperation($package_type, $package_name, $package_version_id);
    }
}
