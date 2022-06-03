<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Gists\CbGistIdRcb;

final class Comments
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\ListComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\ListComments($gist_id, $per_page, $page);
    }
    function post($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\CreateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gists\CreateComment($gist_id);
    }
}
