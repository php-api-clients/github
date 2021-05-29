<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\UpdateWebhookOperation;

final class CbHookIdRcb
{
    function get($owner, $repo, $hook_id): GetWebhookOperation
    {
        return new GetWebhookOperation($owner, $repo, $hook_id);
    }

    function delete($owner, $repo, $hook_id): DeleteWebhookOperation
    {
        return new DeleteWebhookOperation($owner, $repo, $hook_id);
    }

    function patch($owner, $repo, $hook_id): UpdateWebhookOperation
    {
        return new UpdateWebhookOperation($owner, $repo, $hook_id);
    }
}
