<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Organizations\CbOrgRcb\Team\CbTeamSlugRcb;

final class ExternalDashGroups
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListLinkedExternalIdpGroupsToTeamForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListLinkedExternalIdpGroupsToTeamForOrg($org, $team_slug);
    }
}
