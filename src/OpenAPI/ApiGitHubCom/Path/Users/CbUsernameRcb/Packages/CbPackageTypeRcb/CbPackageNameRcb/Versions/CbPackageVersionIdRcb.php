<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id, $username): GetPackageVersionForUser
    {
        return new GetPackageVersionForUser($package_type, $package_name, $package_version_id, $username);
    }
}
