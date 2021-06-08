<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\PingGlobalWebhook;

final class Pings
{
    function post(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): PingGlobalWebhook
    {
        return new PingGlobalWebhook($accept, $hook_id);
    }
}
