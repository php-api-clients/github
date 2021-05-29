<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrgOperation;

final class Restore
{
    function post($package_type, $package_name, $org, $package_version_id): RestorePackageVersionForOrgOperation
    {
        return new RestorePackageVersionForOrgOperation($package_type, $package_name, $org, $package_version_id);
    }
}
