<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetTypeStatsOperation;

final class CbTypeRcb
{
    function get($type): GetTypeStatsOperation
    {
        return new GetTypeStatsOperation($type);
    }
}
