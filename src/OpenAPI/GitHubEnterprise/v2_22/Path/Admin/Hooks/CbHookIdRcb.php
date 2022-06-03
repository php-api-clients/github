<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Hooks;

final class CbHookIdRcb
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetGlobalWebhook($accept, $hook_id);
    }
    function delete(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteGlobalWebhook($accept, $hook_id);
    }
    function patch(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdateGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdateGlobalWebhook($accept, $hook_id);
    }
}
