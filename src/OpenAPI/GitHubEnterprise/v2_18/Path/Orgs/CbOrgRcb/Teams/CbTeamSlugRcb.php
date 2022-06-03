<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Teams;

final class CbTeamSlugRcb
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetByName
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetByName($org, $team_slug);
    }
}
