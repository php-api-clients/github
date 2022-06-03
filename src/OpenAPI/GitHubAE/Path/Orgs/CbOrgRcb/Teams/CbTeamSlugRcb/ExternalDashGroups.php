<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class ExternalDashGroups
{
    function delete($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg($org, $team_slug);
    }
    function patch($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg($org, $team_slug);
    }
}
