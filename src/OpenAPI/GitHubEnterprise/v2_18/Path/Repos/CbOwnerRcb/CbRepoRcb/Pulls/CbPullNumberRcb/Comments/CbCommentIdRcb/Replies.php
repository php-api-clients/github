<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\CreateReplyForReviewCommentOperation;

final class Replies
{
    function post($owner, $repo, $pull_number, $comment_id): CreateReplyForReviewCommentOperation
    {
        return new CreateReplyForReviewCommentOperation($owner, $repo, $pull_number, $comment_id);
    }
}
