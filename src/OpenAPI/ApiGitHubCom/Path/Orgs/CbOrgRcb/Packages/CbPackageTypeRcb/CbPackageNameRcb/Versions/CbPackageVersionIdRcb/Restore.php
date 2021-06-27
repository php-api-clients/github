<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb;

final class Restore
{
    function post($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg($package_type, $package_name, $org, $package_version_id);
    }
}
