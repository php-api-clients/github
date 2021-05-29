<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\DeleteComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\GetComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\UpdateComment;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetComment
    {
        return new GetComment($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteComment
    {
        return new DeleteComment($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateComment
    {
        return new UpdateComment($owner, $repo, $comment_id);
    }
}
