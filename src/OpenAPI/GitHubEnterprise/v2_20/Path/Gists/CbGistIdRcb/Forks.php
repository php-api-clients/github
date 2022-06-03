<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Gists\CbGistIdRcb;

final class Forks
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gists\ListForks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gists\ListForks($gist_id, $per_page, $page);
    }
    function post($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gists\Fork
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gists\Fork($gist_id);
    }
}
