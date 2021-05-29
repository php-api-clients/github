<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id): GetCommitComment
    {
        return new GetCommitComment($owner, $repo, $comment_id);
    }

    function delete($owner, $repo, $comment_id): DeleteCommitComment
    {
        return new DeleteCommitComment($owner, $repo, $comment_id);
    }

    function patch($owner, $repo, $comment_id): UpdateCommitComment
    {
        return new UpdateCommitComment($owner, $repo, $comment_id);
    }
}
