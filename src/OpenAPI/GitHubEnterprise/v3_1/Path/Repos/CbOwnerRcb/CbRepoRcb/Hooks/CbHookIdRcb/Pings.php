<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\PingWebhook;

final class Pings
{
    function post($owner, $repo, $hook_id): PingWebhook
    {
        return new PingWebhook($owner, $repo, $hook_id);
    }
}
