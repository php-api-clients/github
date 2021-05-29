<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\TeamDashSync;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsForLegacyOperation;

final class GroupDashMappings
{
    function get($team_id): ListIdpGroupsForLegacyOperation
    {
        return new ListIdpGroupsForLegacyOperation($team_id);
    }

    function patch($team_id): CreateOrUpdateIdpGroupConnectionsLegacyOperation
    {
        return new CreateOrUpdateIdpGroupConnectionsLegacyOperation($team_id);
    }
}
