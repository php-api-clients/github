<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Restore
{
    function post($package_type, $package_name, $token) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\RestorePackageForAuthenticatedUserOperation($package_type, $package_name, $token);
    }
}
