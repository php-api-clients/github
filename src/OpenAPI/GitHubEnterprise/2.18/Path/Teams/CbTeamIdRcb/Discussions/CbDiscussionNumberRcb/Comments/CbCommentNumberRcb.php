<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\GetDiscussionCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\GetDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }
    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\DeleteDiscussionCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\DeleteDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }
    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\UpdateDiscussionCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\UpdateDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }
}
