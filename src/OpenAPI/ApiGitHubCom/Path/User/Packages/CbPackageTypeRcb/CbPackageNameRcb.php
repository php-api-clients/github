<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser;

final class CbPackageNameRcb
{
    function get($package_type, $package_name): GetPackageForAuthenticatedUser
    {
        return new GetPackageForAuthenticatedUser($package_type, $package_name);
    }

    function delete($package_type, $package_name): DeletePackageForAuthenticatedUser
    {
        return new DeletePackageForAuthenticatedUser($package_type, $package_name);
    }
}
