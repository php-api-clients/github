<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetTypeStats;

final class CbTypeRcb
{
    function get($type): GetTypeStats
    {
        return new GetTypeStats($type);
    }
}
