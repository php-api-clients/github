<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetTypeStats;

final class CbTypeRcb
{
    function get($type): GetTypeStats
    {
        return new GetTypeStats($type);
    }
}
