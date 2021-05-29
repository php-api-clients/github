<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\CreateForTeamDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\ListForTeamDiscussionInOrg;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionInOrg
    {
        return new ListForTeamDiscussionInOrg($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number): CreateForTeamDiscussionInOrg
    {
        return new CreateForTeamDiscussionInOrg($org, $team_slug, $discussion_number);
    }
}
