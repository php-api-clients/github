<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser;

final class Restore
{
    function post($package_type, $package_name, $package_version_id): RestorePackageVersionForAuthenticatedUser
    {
        return new RestorePackageVersionForAuthenticatedUser($package_type, $package_name, $package_version_id);
    }
}
