<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUserOperation;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id, $username): GetPackageVersionForUserOperation
    {
        return new GetPackageVersionForUserOperation($package_type, $package_name, $package_version_id, $username);
    }
}
