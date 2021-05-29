<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartConfigurationProcess;

final class Configure
{
    function post(): StartConfigurationProcess
    {
        return new StartConfigurationProcess();
    }
}
