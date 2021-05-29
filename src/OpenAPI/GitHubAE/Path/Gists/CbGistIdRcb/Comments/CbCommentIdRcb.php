<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\DeleteCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\UpdateCommentOperation;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id): GetCommentOperation
    {
        return new GetCommentOperation($gist_id, $comment_id);
    }

    function delete($gist_id, $comment_id): DeleteCommentOperation
    {
        return new DeleteCommentOperation($gist_id, $comment_id);
    }

    function patch($gist_id, $comment_id): UpdateCommentOperation
    {
        return new UpdateCommentOperation($gist_id, $comment_id);
    }
}
