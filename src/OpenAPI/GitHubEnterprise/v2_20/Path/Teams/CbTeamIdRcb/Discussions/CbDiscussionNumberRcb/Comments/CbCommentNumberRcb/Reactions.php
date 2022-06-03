<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussionComment($accept, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
}
