<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

final class Reactions
{
    function get($team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionCommentLegacy($team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    function post($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionCommentLegacy($team_id, $discussion_number, $comment_number);
    }
}
