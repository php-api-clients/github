<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\GetTypeStats;

final class CbTypeRcb
{
    function get($type): GetTypeStats
    {
        return new GetTypeStats($type);
    }
}
