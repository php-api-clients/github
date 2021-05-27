<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Commits
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\CommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\CommitsOperation($q, $sort, $order, $per_page, $page);
    }
}
