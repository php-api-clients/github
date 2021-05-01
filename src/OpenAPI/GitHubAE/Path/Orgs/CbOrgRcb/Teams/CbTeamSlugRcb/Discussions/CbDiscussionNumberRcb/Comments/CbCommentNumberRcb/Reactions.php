<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
}