<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\DeleteDiscussionCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetDiscussionCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\UpdateDiscussionCommentOperation;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number): GetDiscussionCommentOperation
    {
        return new GetDiscussionCommentOperation($team_id, $discussion_number, $comment_number);
    }

    function delete($team_id, $discussion_number, $comment_number): DeleteDiscussionCommentOperation
    {
        return new DeleteDiscussionCommentOperation($team_id, $discussion_number, $comment_number);
    }

    function patch($team_id, $discussion_number, $comment_number): UpdateDiscussionCommentOperation
    {
        return new UpdateDiscussionCommentOperation($team_id, $discussion_number, $comment_number);
    }
}
