<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
}
