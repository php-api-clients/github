<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsInOrgOperation;

final class Discussions
{
    function get($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned): ListDiscussionsInOrgOperation
    {
        return new ListDiscussionsInOrgOperation($org, $team_slug, $direction, $per_page, $page, $pinned);
    }

    function post($org, $team_slug): CreateDiscussionInOrgOperation
    {
        return new CreateDiscussionInOrgOperation($org, $team_slug);
    }
}
