<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetOrgInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetOrgInstallation($accept, $org);
    }
}
