<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpgradeLicenseOperation;

final class Upgrade
{
    function post(): UpgradeLicenseOperation
    {
        return new UpgradeLicenseOperation();
    }
}
