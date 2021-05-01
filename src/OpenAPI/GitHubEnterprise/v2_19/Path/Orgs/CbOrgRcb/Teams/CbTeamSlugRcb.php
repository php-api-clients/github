<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\Orgs\CbOrgRcb\Teams;

final class CbTeamSlugRcb
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetByNameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetByNameOperation($org, $team_slug);
    }
}