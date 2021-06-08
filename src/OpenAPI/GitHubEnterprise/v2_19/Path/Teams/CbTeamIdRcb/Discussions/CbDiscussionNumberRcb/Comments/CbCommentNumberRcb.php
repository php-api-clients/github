<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\DeleteDiscussionComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetDiscussionComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\UpdateDiscussionComment;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number): GetDiscussionComment
    {
        return new GetDiscussionComment($team_id, $discussion_number, $comment_number);
    }

    function delete($team_id, $discussion_number, $comment_number): DeleteDiscussionComment
    {
        return new DeleteDiscussionComment($team_id, $discussion_number, $comment_number);
    }

    function patch($team_id, $discussion_number, $comment_number): UpdateDiscussionComment
    {
        return new UpdateDiscussionComment($team_id, $discussion_number, $comment_number);
    }
}
