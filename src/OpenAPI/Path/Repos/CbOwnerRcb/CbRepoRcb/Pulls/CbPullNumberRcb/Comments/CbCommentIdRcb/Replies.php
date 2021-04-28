<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\CreateReplyForReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\CreateReplyForReviewCommentOperation($owner, $repo, $pull_number, $comment_id);
    }
}
