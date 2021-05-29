<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUserOperation;

final class Restore
{
    function post($package_type, $package_name, $token): RestorePackageForAuthenticatedUserOperation
    {
        return new RestorePackageForAuthenticatedUserOperation($package_type, $package_name, $token);
    }
}
