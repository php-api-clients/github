<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\TeamDashSync;

final class GroupDashMappings
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsInOrg($org, $team_slug);
    }
    function patch($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrg($org, $team_slug);
    }
}
