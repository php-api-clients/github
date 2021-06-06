<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions;

final class CbPackageVersionIdRcb
{
    function get($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization($package_type, $package_name, $org, $package_version_id);
    }
    function delete($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg($package_type, $package_name, $org, $package_version_id);
    }
}
