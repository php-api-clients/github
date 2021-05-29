<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls\CreateReplyForReviewComment;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id): CreateReplyForReviewComment
    {
        return new CreateReplyForReviewComment($owner, $repo, $pull_number, $comment_id);
    }
}
