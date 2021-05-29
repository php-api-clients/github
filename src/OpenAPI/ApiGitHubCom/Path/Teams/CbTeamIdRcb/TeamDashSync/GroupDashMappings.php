<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\TeamDashSync;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsForLegacy;

final class GroupDashMappings
{
    function get($team_id): ListIdpGroupsForLegacy
    {
        return new ListIdpGroupsForLegacy($team_id);
    }

    function patch($team_id): CreateOrUpdateIdpGroupConnectionsLegacy
    {
        return new CreateOrUpdateIdpGroupConnectionsLegacy($team_id);
    }
}
