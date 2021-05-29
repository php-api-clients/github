<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprise\Stats;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetTypeStatsOperation;

final class CbTypeRcb
{
    function get($type): GetTypeStatsOperation
    {
        return new GetTypeStatsOperation($type);
    }
}
