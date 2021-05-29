<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg;

final class Restore
{
    function post($package_type, $package_name, $org, $token): RestorePackageForOrg
    {
        return new RestorePackageForOrg($package_type, $package_name, $org, $token);
    }
}
