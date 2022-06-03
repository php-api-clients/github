<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReplyForReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReplyForReviewComment($owner, $repo, $pull_number, $comment_id);
    }
}
