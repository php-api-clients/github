<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewComment($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeleteReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeleteReviewComment($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewComment($owner, $repo, $comment_id);
    }
}
