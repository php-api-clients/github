<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Hooks\CbHookIdRcb;

final class Pings
{
    function post($hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhook($hook_id);
    }
}
