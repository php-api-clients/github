<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

final class Restore
{
    function post($package_type, $package_name, $org, $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrgOperation($package_type, $package_name, $org, $token);
    }
}
