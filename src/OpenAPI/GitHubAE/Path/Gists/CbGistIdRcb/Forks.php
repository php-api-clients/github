<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Gists\CbGistIdRcb;

final class Forks
{
    function get($gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForksOperation($gist_id, $per_page, $page);
    }
    function post($gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ForkOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ForkOperation($gist_id);
    }
}
