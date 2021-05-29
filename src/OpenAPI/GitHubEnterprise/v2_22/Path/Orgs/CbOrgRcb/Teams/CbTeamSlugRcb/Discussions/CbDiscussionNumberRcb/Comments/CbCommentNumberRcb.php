<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\DeleteDiscussionCommentInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetDiscussionCommentInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\UpdateDiscussionCommentInOrgOperation;

final class CbCommentNumberRcb
{
    function get($org, $team_slug, $discussion_number, $comment_number): GetDiscussionCommentInOrgOperation
    {
        return new GetDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }

    function delete($org, $team_slug, $discussion_number, $comment_number): DeleteDiscussionCommentInOrgOperation
    {
        return new DeleteDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }

    function patch($org, $team_slug, $discussion_number, $comment_number): UpdateDiscussionCommentInOrgOperation
    {
        return new UpdateDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
}
