<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc'): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels($repository_id, $q, $sort, $order);
    }
}
