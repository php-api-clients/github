<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Setup\Api;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetSettings;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SetSettings;

final class Settings
{
    function get(): GetSettings
    {
        return new GetSettings();
    }

    function put(): SetSettings
    {
        return new SetSettings();
    }
}
