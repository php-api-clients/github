<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Search;

final class Commits
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Search\CommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Search\CommitsOperation($q, $sort, $order, $per_page, $page);
    }
}
