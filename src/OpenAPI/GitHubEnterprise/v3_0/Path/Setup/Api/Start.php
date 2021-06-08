<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense;

final class Start
{
    function post(): CreateEnterpriseServerLicense
    {
        return new CreateEnterpriseServerLicense();
    }
}
