<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeleteCommitCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetCommitCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\UpdateCommitCommentOperation;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetCommitCommentOperation
    {
        return new GetCommitCommentOperation($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteCommitCommentOperation
    {
        return new DeleteCommitCommentOperation($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateCommitCommentOperation
    {
        return new UpdateCommitCommentOperation($owner, $repo, $comment_id);
    }
}
