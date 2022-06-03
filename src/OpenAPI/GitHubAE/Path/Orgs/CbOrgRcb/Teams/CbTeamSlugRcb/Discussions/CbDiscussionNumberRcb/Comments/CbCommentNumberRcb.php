<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
    function delete($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
    function patch($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrg($org, $team_slug, $discussion_number, $comment_number);
    }
}
