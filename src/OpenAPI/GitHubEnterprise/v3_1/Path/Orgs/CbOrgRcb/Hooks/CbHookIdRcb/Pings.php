<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\PingWebhookOperation;

final class Pings
{
    function post($org, $hook_id): PingWebhookOperation
    {
        return new PingWebhookOperation($org, $hook_id);
    }
}
