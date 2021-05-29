<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\TeamDashSync;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsInOrgOperation;

final class GroupDashMappings
{
    function get($org, $team_slug): ListIdpGroupsInOrgOperation
    {
        return new ListIdpGroupsInOrgOperation($org, $team_slug);
    }

    function patch($org, $team_slug): CreateOrUpdateIdpGroupConnectionsInOrgOperation
    {
        return new CreateOrUpdateIdpGroupConnectionsInOrgOperation($org, $team_slug);
    }
}
