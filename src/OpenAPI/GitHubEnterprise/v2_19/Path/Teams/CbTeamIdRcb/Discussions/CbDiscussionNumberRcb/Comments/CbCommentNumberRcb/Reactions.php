<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\CreateForTeamDiscussionComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Reactions\ListForTeamDiscussionComment;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionComment
    {
        return new ListForTeamDiscussionComment($accept, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number): CreateForTeamDiscussionComment
    {
        return new CreateForTeamDiscussionComment($accept, $team_id, $discussion_number, $comment_number);
    }
}
