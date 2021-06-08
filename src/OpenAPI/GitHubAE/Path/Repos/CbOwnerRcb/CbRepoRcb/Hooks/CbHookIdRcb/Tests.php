<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\TestPushWebhook;

final class Tests
{
    function post($owner, $repo, $hook_id): TestPushWebhook
    {
        return new TestPushWebhook($owner, $repo, $hook_id);
    }
}
