<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetTypeStatsOperation;

final class CbTypeRcb
{
    function get($type): GetTypeStatsOperation
    {
        return new GetTypeStatsOperation($type);
    }
}
