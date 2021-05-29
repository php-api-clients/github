<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Packages\CbPackageTypeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUserOperation;

final class CbPackageNameRcb
{
    function get($package_type, $package_name): GetPackageForAuthenticatedUserOperation
    {
        return new GetPackageForAuthenticatedUserOperation($package_type, $package_name);
    }

    function delete($package_type, $package_name): DeletePackageForAuthenticatedUserOperation
    {
        return new DeletePackageForAuthenticatedUserOperation($package_type, $package_name);
    }
}
