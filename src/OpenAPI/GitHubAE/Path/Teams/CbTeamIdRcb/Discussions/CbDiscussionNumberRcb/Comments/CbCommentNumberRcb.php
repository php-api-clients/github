<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacyOperation;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number): GetDiscussionCommentLegacyOperation
    {
        return new GetDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }

    function delete($team_id, $discussion_number, $comment_number): DeleteDiscussionCommentLegacyOperation
    {
        return new DeleteDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }

    function patch($team_id, $discussion_number, $comment_number): UpdateDiscussionCommentLegacyOperation
    {
        return new UpdateDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }
}
