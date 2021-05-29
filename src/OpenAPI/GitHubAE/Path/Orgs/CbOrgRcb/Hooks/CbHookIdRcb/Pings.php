<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\PingWebhook;

final class Pings
{
    function post($org, $hook_id): PingWebhook
    {
        return new PingWebhook($org, $hook_id);
    }
}
