<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Discussions
{
    function get($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsInOrg($org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    function post($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionInOrg($org, $team_slug);
    }
}
