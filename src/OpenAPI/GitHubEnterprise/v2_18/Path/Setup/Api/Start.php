<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense;

final class Start
{
    function post(): CreateEnterpriseServerLicense
    {
        return new CreateEnterpriseServerLicense();
    }
}
