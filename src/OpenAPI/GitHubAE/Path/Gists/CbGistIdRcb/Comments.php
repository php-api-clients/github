<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

final class Comments
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommentsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommentsOperation($gist_id, $per_page, $page);
    }
    function post($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateCommentOperation($gist_id);
    }
}
