<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganizationOperation;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $org, $package_version_id): GetPackageVersionForOrganizationOperation
    {
        return new GetPackageVersionForOrganizationOperation($package_type, $package_name, $org, $package_version_id);
    }

    function delete($package_type, $package_name, $org, $package_version_id): DeletePackageVersionForOrgOperation
    {
        return new DeletePackageVersionForOrgOperation($package_type, $package_name, $org, $package_version_id);
    }
}
