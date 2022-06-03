<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Teams
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\ListChildInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\ListChildInOrg($org, $team_slug, $per_page, $page);
    }
}
