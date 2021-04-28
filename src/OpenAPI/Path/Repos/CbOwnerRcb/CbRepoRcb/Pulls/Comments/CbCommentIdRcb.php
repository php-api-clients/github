<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\GetReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\GetReviewCommentOperation($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\DeleteReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\DeleteReviewCommentOperation($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\UpdateReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\UpdateReviewCommentOperation($owner, $repo, $comment_id);
    }
}
