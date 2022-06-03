<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForTeamDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForTeamDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
}
