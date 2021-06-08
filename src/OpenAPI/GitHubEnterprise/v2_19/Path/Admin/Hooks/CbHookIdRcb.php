<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeleteGlobalWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetGlobalWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdateGlobalWebhook;

final class CbHookIdRcb
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): GetGlobalWebhook
    {
        return new GetGlobalWebhook($accept, $hook_id);
    }

    function delete(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): DeleteGlobalWebhook
    {
        return new DeleteGlobalWebhook($accept, $hook_id);
    }

    function patch(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): UpdateGlobalWebhook
    {
        return new UpdateGlobalWebhook($accept, $hook_id);
    }
}
