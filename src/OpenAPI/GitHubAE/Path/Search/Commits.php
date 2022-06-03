<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Commits
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits($q, $sort, $order, $per_page, $page);
    }
}
