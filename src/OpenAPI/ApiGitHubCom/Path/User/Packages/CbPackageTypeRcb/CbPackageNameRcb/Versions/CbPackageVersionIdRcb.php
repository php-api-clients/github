<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUserOperation;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $package_version_id): GetPackageVersionForAuthenticatedUserOperation
    {
        return new GetPackageVersionForAuthenticatedUserOperation($package_type, $package_name, $package_version_id);
    }

    function delete($package_type, $package_name, $package_version_id): DeletePackageVersionForAuthenticatedUserOperation
    {
        return new DeletePackageVersionForAuthenticatedUserOperation($package_type, $package_name, $package_version_id);
    }
}
