<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg;

final class CbCommentNumberRcb
{
    function get($org, $team_slug, $discussion_number, $comment_number): GetDiscussionCommentInOrg
    {
        return new GetDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }

    function delete($org, $team_slug, $discussion_number, $comment_number): DeleteDiscussionCommentInOrg
    {
        return new DeleteDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }

    function patch($org, $team_slug, $discussion_number, $comment_number): UpdateDiscussionCommentInOrg
    {
        return new UpdateDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
}
