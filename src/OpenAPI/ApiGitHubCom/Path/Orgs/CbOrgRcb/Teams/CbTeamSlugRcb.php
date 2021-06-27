<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams;

final class CbTeamSlugRcb
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName($org, $team_slug);
    }
    function delete($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg($org, $team_slug);
    }
    function patch($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg($org, $team_slug);
    }
}
