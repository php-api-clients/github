<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Hooks;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhookOperation;

final class CbHookIdRcb
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): GetGlobalWebhookOperation
    {
        return new GetGlobalWebhookOperation($accept, $hook_id);
    }

    function delete(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): DeleteGlobalWebhookOperation
    {
        return new DeleteGlobalWebhookOperation($accept, $hook_id);
    }

    function patch(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id): UpdateGlobalWebhookOperation
    {
        return new UpdateGlobalWebhookOperation($accept, $hook_id);
    }
}
