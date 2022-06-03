<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Runners;

final class Downloads
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForOrg($org);
    }
}
