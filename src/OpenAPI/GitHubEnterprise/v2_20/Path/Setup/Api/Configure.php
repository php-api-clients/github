<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\StartConfigurationProcessOperation;

final class Configure
{
    function post(): StartConfigurationProcessOperation
    {
        return new StartConfigurationProcessOperation();
    }
}
