<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

final class Comments
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListComments($gist_id, $per_page, $page);
    }
    function post($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateComment($gist_id);
    }
}
