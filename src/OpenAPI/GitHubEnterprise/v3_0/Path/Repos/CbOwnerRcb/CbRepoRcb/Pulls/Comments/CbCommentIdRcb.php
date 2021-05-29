<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\DeleteReviewCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\GetReviewCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\UpdateReviewCommentOperation;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetReviewCommentOperation
    {
        return new GetReviewCommentOperation($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteReviewCommentOperation
    {
        return new DeleteReviewCommentOperation($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateReviewCommentOperation
    {
        return new UpdateReviewCommentOperation($owner, $repo, $comment_id);
    }
}
