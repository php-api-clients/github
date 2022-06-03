<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

final class Installation
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation($org);
    }
}
