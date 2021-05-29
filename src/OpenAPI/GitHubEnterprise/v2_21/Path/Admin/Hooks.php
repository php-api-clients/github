<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\CreateGlobalWebhookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListGlobalWebhooksOperation;

final class Hooks
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1): ListGlobalWebhooksOperation
    {
        return new ListGlobalWebhooksOperation($accept, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.superpro-preview+json'): CreateGlobalWebhookOperation
    {
        return new CreateGlobalWebhookOperation($accept);
    }
}
