<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepoOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepoOperation;

final class Config
{
    function get($owner, $repo, $hook_id): GetWebhookConfigForRepoOperation
    {
        return new GetWebhookConfigForRepoOperation($owner, $repo, $hook_id);
    }

    function patch($owner, $repo, $hook_id): UpdateWebhookConfigForRepoOperation
    {
        return new UpdateWebhookConfigForRepoOperation($owner, $repo, $hook_id);
    }
}
