<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrgOperation;

final class Restore
{
    function post($package_type, $package_name, $org, $token): RestorePackageForOrgOperation
    {
        return new RestorePackageForOrgOperation($package_type, $package_name, $org, $token);
    }
}
