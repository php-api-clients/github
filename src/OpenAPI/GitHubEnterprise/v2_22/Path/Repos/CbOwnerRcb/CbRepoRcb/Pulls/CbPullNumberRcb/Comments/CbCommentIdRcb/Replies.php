<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls\CreateReplyForReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls\CreateReplyForReviewComment($owner, $repo, $pull_number, $comment_id);
    }
}
