<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\PingWebhookOperation;

final class Pings
{
    function post($owner, $repo, $hook_id): PingWebhookOperation
    {
        return new PingWebhookOperation($owner, $repo, $hook_id);
    }
}
