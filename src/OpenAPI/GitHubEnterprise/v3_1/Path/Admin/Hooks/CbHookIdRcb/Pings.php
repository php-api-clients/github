<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PingGlobalWebhookOperation;

final class Pings
{
    function post(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): PingGlobalWebhookOperation
    {
        return new PingGlobalWebhookOperation($accept, $hook_id);
    }
}
