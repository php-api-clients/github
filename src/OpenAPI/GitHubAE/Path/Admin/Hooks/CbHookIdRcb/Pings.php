<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Admin\Hooks\CbHookIdRcb;

final class Pings
{
    function post(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhookOperation($accept, $hook_id);
    }
}
