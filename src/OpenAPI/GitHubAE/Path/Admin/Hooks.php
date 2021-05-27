<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin;

final class Hooks
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooksOperation($accept, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.superpro-preview+json') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhookOperation($accept);
    }
}
