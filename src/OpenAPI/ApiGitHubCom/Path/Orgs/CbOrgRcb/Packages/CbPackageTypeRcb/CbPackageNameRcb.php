<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization;

final class CbPackageNameRcb
{
    function get($package_type, $package_name, $org): GetPackageForOrganization
    {
        return new GetPackageForOrganization($package_type, $package_name, $org);
    }

    function delete($package_type, $package_name, $org): DeletePackageForOrg
    {
        return new DeletePackageForOrg($package_type, $package_name, $org);
    }
}
