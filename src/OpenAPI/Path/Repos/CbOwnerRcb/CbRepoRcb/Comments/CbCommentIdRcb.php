<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitCommentOperation($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteCommitCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteCommitCommentOperation($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateCommitCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateCommitCommentOperation($owner, $repo, $comment_id);
    }
}
