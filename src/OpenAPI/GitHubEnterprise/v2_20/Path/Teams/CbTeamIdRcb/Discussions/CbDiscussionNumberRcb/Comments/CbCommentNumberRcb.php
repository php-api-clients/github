<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetDiscussionComment($team_id, $discussion_number, $comment_number);
    }
    function delete($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\DeleteDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\DeleteDiscussionComment($team_id, $discussion_number, $comment_number);
    }
    function patch($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\UpdateDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\UpdateDiscussionComment($team_id, $discussion_number, $comment_number);
    }
}
