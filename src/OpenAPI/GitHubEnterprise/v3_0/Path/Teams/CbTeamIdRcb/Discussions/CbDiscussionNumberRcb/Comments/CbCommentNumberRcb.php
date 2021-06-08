<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionCommentLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionCommentLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionCommentLegacy;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number): GetDiscussionCommentLegacy
    {
        return new GetDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }

    function delete($team_id, $discussion_number, $comment_number): DeleteDiscussionCommentLegacy
    {
        return new DeleteDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }

    function patch($team_id, $discussion_number, $comment_number): UpdateDiscussionCommentLegacy
    {
        return new UpdateDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
}
