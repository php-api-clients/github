<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Gists\CbGistIdRcb\Comments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists\DeleteComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists\GetComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists\UpdateComment;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id): GetComment
    {
        return new GetComment($gist_id, $comment_id);
    }

    function delete($gist_id, $comment_id): DeleteComment
    {
        return new DeleteComment($gist_id, $comment_id);
    }

    function patch($gist_id, $comment_id): UpdateComment
    {
        return new UpdateComment($gist_id, $comment_id);
    }
}
