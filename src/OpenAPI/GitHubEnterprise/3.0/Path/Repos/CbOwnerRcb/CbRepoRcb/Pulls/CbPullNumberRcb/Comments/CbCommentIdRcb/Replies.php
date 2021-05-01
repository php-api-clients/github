<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Pulls\CreateReplyForReviewCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Pulls\CreateReplyForReviewCommentOperation($owner, $repo, $pull_number, $comment_id);
    }
}
