<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id): GetPackageVersionForAuthenticatedUser
    {
        return new GetPackageVersionForAuthenticatedUser($package_type, $package_name, $package_version_id);
    }

    function delete($package_type, $package_name, $package_version_id): DeletePackageVersionForAuthenticatedUser
    {
        return new DeletePackageVersionForAuthenticatedUser($package_type, $package_name, $package_version_id);
    }
}
