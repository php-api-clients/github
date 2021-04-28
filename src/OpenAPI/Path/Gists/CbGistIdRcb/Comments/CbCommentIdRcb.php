<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists\CbGistIdRcb\Comments;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetCommentOperation($gist_id, $comment_id);
    }
    function delete($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\DeleteCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\DeleteCommentOperation($gist_id, $comment_id);
    }
    function patch($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\UpdateCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\UpdateCommentOperation($gist_id, $comment_id);
    }
}
