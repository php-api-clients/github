<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class ExternalDashGroups
{
    function delete($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg($org, $team_slug);
    }
    function patch($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\LinkExternalIdpGroupToTeamForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\LinkExternalIdpGroupToTeamForOrg($org, $team_slug);
    }
}
