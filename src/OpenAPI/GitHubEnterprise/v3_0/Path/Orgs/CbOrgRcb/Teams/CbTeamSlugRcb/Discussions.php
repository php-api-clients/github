<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Discussions
{
    function get($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsInOrgOperation($org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    function post($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionInOrgOperation($org, $team_slug);
    }
}
