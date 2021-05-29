<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentLegacyOperation;

final class Reactions
{
    function get($team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionCommentLegacyOperation
    {
        return new ListForTeamDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }

    function post($team_id, $discussion_number, $comment_number): CreateForTeamDiscussionCommentLegacyOperation
    {
        return new CreateForTeamDiscussionCommentLegacyOperation($team_id, $discussion_number, $comment_number);
    }
}
