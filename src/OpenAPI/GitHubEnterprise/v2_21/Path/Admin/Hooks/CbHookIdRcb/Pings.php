<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\Hooks\CbHookIdRcb;

final class Pings
{
    function post(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\PingGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\PingGlobalWebhook($accept, $hook_id);
    }
}
