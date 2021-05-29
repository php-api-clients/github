<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetSettingsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetSettingsOperation;

final class Settings
{
    function get(): GetSettingsOperation
    {
        return new GetSettingsOperation();
    }

    function put(): SetSettingsOperation
    {
        return new SetSettingsOperation();
    }
}
