<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetComment($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteComment($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateComment($owner, $repo, $comment_id);
    }
}
