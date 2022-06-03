<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\PingWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\PingWebhook($owner, $repo, $hook_id);
    }
}
