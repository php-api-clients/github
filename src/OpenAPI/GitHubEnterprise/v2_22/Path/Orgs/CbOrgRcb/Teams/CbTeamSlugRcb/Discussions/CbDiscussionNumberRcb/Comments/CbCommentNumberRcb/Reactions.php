<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\CreateForTeamDiscussionCommentInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\ListForTeamDiscussionCommentInOrg;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionCommentInOrg
    {
        return new ListForTeamDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number, $comment_number): CreateForTeamDiscussionCommentInOrg
    {
        return new CreateForTeamDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
}
