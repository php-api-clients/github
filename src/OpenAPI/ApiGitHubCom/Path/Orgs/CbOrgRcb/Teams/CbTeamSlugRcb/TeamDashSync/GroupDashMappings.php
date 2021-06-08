<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\TeamDashSync;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsInOrg;

final class GroupDashMappings
{
    function get($org, $team_slug): ListIdpGroupsInOrg
    {
        return new ListIdpGroupsInOrg($org, $team_slug);
    }

    function patch($org, $team_slug): CreateOrUpdateIdpGroupConnectionsInOrg
    {
        return new CreateOrUpdateIdpGroupConnectionsInOrg($org, $team_slug);
    }
}
