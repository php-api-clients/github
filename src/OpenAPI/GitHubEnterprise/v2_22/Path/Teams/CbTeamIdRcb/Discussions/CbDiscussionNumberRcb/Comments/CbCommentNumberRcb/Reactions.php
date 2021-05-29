<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\CreateForTeamDiscussionCommentLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\ListForTeamDiscussionCommentLegacy;

final class Reactions
{
    function get($team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1): ListForTeamDiscussionCommentLegacy
    {
        return new ListForTeamDiscussionCommentLegacy($team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }

    function post($team_id, $discussion_number, $comment_number): CreateForTeamDiscussionCommentLegacy
    {
        return new CreateForTeamDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
}
