<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $org, $package_version_id): GetPackageVersionForOrganization
    {
        return new GetPackageVersionForOrganization($package_type, $package_name, $org, $package_version_id);
    }

    function delete($package_type, $package_name, $org, $package_version_id): DeletePackageVersionForOrg
    {
        return new DeletePackageVersionForOrg($package_type, $package_name, $org, $package_version_id);
    }
}
