<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin;

final class Hooks
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListGlobalWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListGlobalWebhooks($accept, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.superpro-preview+json') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\CreateGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\CreateGlobalWebhook($accept);
    }
}
