<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\PingWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\PingWebhookOperation($owner, $repo, $hook_id);
    }
}
