<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\PingWebhook;

final class Pings
{
    function post($owner, $repo, $hook_id): PingWebhook
    {
        return new PingWebhook($owner, $repo, $hook_id);
    }
}
