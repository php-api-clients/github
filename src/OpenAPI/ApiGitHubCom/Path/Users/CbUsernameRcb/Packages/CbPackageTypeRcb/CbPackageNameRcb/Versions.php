<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser;

final class Versions
{
    function get($package_type, $package_name, $username): GetAllPackageVersionsForPackageOwnedByUser
    {
        return new GetAllPackageVersionsForPackageOwnedByUser($package_type, $package_name, $username);
    }
}
