<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Packages\CbPackageTypeRcb;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForUserOperation($package_type, $package_name, $username);
    }
}
