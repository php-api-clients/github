<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists;

final class Starred
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListStarredOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListStarredOperation($since, $per_page, $page);
    }
}
