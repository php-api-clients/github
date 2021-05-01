<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Reactions\ListForTeamDiscussionCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Reactions\ListForTeamDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Reactions\CreateForTeamDiscussionCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Reactions\CreateForTeamDiscussionCommentOperation($accept, $team_id, $discussion_number, $comment_number);
    }
}
