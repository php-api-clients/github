<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUserOperation;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $username): GetPackageForUserOperation
    {
        return new GetPackageForUserOperation($package_type, $package_name, $username);
    }
}
