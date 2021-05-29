<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\TestPushWebhookOperation;

final class Tests
{
    function post($owner, $repo, $hook_id): TestPushWebhookOperation
    {
        return new TestPushWebhookOperation($owner, $repo, $hook_id);
    }
}
