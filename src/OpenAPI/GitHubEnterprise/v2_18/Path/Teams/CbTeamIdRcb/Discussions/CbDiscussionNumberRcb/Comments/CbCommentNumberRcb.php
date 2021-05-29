<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionComment;

final class CbCommentNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): GetDiscussionComment
    {
        return new GetDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }

    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): DeleteDiscussionComment
    {
        return new DeleteDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }

    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number): UpdateDiscussionComment
    {
        return new UpdateDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
}
