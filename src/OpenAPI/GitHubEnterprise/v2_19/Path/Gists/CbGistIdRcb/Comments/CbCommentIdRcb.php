<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Gists\CbGistIdRcb\Comments;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\GetComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\GetComment($gist_id, $comment_id);
    }
    function delete($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\DeleteComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\DeleteComment($gist_id, $comment_id);
    }
    function patch($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\UpdateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\UpdateComment($gist_id, $comment_id);
    }
}
