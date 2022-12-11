<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\SecurityDashManagers\Teams;

final class CbTeamSlugRcb
{
    function put($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam($org, $team_slug);
    }
    function delete($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam($org, $team_slug);
    }
}
