<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo;

final class Config
{
    function get($owner, $repo, $hook_id): GetWebhookConfigForRepo
    {
        return new GetWebhookConfigForRepo($owner, $repo, $hook_id);
    }

    function patch($owner, $repo, $hook_id): UpdateWebhookConfigForRepo
    {
        return new UpdateWebhookConfigForRepo($owner, $repo, $hook_id);
    }
}
