<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels($repository_id, $q, $sort, $order, $per_page, $page);
    }
}
