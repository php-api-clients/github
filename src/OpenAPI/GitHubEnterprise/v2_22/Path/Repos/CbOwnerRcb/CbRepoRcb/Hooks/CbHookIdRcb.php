<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeleteWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\UpdateWebhook;

final class CbHookIdRcb
{
    function get($owner, $repo, $hook_id): GetWebhook
    {
        return new GetWebhook($owner, $repo, $hook_id);
    }

    function delete($owner, $repo, $hook_id): DeleteWebhook
    {
        return new DeleteWebhook($owner, $repo, $hook_id);
    }

    function patch($owner, $repo, $hook_id): UpdateWebhook
    {
        return new UpdateWebhook($owner, $repo, $hook_id);
    }
}
