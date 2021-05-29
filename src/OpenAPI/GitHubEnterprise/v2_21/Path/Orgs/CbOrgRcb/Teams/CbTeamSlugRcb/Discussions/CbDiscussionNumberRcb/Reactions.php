<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionInOrgOperation;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionInOrgOperation
    {
        return new ListForTeamDiscussionInOrgOperation($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number): CreateForTeamDiscussionInOrgOperation
    {
        return new CreateForTeamDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
}
