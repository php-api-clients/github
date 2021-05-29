<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\PingWebhookOperation;

final class Pings
{
    function post($org, $hook_id): PingWebhookOperation
    {
        return new PingWebhookOperation($org, $hook_id);
    }
}
