<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Gists\CbGistIdRcb\Comments;

final class CbCommentIdRcb
{
    function get($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetCommentOperation($gist_id, $comment_id);
    }
    function delete($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteCommentOperation($gist_id, $comment_id);
    }
    function patch($gist_id, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateCommentOperation($gist_id, $comment_id);
    }
}
