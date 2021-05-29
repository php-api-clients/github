<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\PingWebhookOperation;

final class Pings
{
    function post($org, $hook_id): PingWebhookOperation
    {
        return new PingWebhookOperation($org, $hook_id);
    }
}
