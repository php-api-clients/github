<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments;

final class CbCommentIdRcb
{
    function get($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitComment($owner, $repo, $comment_id);
    }
    function delete($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteCommitComment($owner, $repo, $comment_id);
    }
    function patch($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateCommitComment($owner, $repo, $comment_id);
    }
}
