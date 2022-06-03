<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels($repository_id, $q, $sort, $order, $per_page, $page);
    }
}
