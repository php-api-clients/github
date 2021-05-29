<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists;

final class Public
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListPublic($since, $per_page, $page);
    }
}
