<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganizationOperation;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $org): GetPackageForOrganizationOperation
    {
        return new GetPackageForOrganizationOperation($package_type, $package_name, $org);
    }

    function delete($package_type, $package_name, $org): DeletePackageForOrgOperation
    {
        return new DeletePackageForOrgOperation($package_type, $package_name, $org);
    }
}
