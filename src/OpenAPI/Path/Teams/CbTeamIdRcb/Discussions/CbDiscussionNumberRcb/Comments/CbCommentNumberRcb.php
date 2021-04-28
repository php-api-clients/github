<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetDiscussionCommentLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }
    function delete($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteDiscussionCommentLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }
    function patch($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateDiscussionCommentLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }
}
