<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Packages
{
    function get($package_type, $org, $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization($package_type, $org, $visibility);
    }
}
