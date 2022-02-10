<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb\Comments;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment($gist_id, $comment_id);
    }
    function delete($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment($gist_id, $comment_id);
    }
    function patch($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment($gist_id, $comment_id);
    }
}
