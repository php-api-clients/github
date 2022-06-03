<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
    function delete($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
    function patch($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
}
