<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhookOperation;

final class Tests
{
    function post($owner, $repo, $hook_id): TestPushWebhookOperation
    {
        return new TestPushWebhookOperation($owner, $repo, $hook_id);
    }
}
