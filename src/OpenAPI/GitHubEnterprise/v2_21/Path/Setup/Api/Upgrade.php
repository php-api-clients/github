<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpgradeLicense;

final class Upgrade
{
    function post(): UpgradeLicense
    {
        return new UpgradeLicense();
    }
}
