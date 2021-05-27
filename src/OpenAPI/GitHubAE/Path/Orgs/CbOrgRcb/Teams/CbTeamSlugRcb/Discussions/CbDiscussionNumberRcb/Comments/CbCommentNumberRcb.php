<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments;

final class CbCommentNumberRcb
{
    function get($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
    function delete($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
    function patch($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number, $comment_number);
    }
}
