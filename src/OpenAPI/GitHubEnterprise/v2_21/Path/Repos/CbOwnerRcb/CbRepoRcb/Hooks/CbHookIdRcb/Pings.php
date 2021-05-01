<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\PingWebhookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\PingWebhookOperation($owner, $repo, $hook_id);
    }
}