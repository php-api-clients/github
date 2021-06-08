<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser;

final class Restore
{
    function post($package_type, $package_name, $token): RestorePackageForAuthenticatedUser
    {
        return new RestorePackageForAuthenticatedUser($package_type, $package_name, $token);
    }
}
