<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Admin\Hooks;

final class CbHookIdRcb
{
    function get(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGlobalWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGlobalWebhookOperation($accept, $hook_id);
    }
    function delete(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteGlobalWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteGlobalWebhookOperation($accept, $hook_id);
    }
    function patch(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateGlobalWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateGlobalWebhookOperation($accept, $hook_id);
    }
}
