<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Repos
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrg($org, $team_slug, $per_page, $page);
    }
}
