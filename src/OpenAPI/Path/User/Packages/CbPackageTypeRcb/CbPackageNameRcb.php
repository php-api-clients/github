<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Packages\CbPackageTypeRcb;

final class CbPackageNameRcb
{
    function get($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\GetPackageForAuthenticatedUserOperation($package_type, $package_name);
    }
    function delete($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Packages\DeletePackageForAuthenticatedUserOperation($package_type, $package_name);
    }
}
