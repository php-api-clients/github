<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionCommentOperation;

final class CbCommentNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): GetDiscussionCommentOperation
    {
        return new GetDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }

    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): DeleteDiscussionCommentOperation
    {
        return new DeleteDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }

    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): UpdateDiscussionCommentOperation
    {
        return new UpdateDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }
}
