<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageVersionForUserOperation($package_type, $package_name, $package_version_id, $username);
    }
}
