<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg;

final class Discussions
{
    function get($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned): ListDiscussionsInOrg
    {
        return new ListDiscussionsInOrg($org, $team_slug, $direction, $per_page, $page, $pinned);
    }

    function post($org, $team_slug): CreateDiscussionInOrg
    {
        return new CreateDiscussionInOrg($org, $team_slug);
    }
}
