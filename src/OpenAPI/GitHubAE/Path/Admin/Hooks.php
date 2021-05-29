<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks;

final class Hooks
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1): ListGlobalWebhooks
    {
        return new ListGlobalWebhooks($accept, $per_page, $page);
    }

    function post(string $accept = 'application/vnd.github.superpro-preview+json'): CreateGlobalWebhook
    {
        return new CreateGlobalWebhook($accept);
    }
}
