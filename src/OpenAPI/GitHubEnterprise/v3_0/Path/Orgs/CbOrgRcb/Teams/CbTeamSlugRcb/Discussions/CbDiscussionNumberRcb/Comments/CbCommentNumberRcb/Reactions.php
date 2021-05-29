<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\CreateForTeamDiscussionCommentInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\ListForTeamDiscussionCommentInOrgOperation;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionCommentInOrgOperation
    {
        return new ListForTeamDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number, $comment_number): CreateForTeamDiscussionCommentInOrgOperation
    {
        return new CreateForTeamDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
}
