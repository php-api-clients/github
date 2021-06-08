<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\TestPushWebhook;

final class Tests
{
    function post($owner, $repo, $hook_id): TestPushWebhook
    {
        return new TestPushWebhook($owner, $repo, $hook_id);
    }
}
