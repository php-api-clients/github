<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\PingWebhook;

final class Pings
{
    function post($org, $hook_id): PingWebhook
    {
        return new PingWebhook($org, $hook_id);
    }
}
