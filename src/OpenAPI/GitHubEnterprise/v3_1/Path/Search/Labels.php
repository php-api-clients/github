<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc'): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Labels
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Labels($repository_id, $q, $sort, $order);
    }
}