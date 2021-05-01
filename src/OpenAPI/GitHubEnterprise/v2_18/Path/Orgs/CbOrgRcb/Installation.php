<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\\Orgs\CbOrgRcb;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetOrgInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetOrgInstallationOperation($accept, $org);
    }
}
