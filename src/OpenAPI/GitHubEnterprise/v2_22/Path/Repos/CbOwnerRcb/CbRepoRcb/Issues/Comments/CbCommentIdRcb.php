<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateCommentOperation;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetCommentOperation
    {
        return new GetCommentOperation($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteCommentOperation
    {
        return new DeleteCommentOperation($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateCommentOperation
    {
        return new UpdateCommentOperation($owner, $repo, $comment_id);
    }
}
