<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetCommentOperation($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteCommentOperation($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateCommentOperation($owner, $repo, $comment_id);
    }
}
