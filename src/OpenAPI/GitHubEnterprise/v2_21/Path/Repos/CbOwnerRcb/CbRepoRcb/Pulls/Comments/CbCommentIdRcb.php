<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\DeleteReviewComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\GetReviewComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\UpdateReviewComment;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetReviewComment
    {
        return new GetReviewComment($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteReviewComment
    {
        return new DeleteReviewComment($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateReviewComment
    {
        return new UpdateReviewComment($owner, $repo, $comment_id);
    }
}
