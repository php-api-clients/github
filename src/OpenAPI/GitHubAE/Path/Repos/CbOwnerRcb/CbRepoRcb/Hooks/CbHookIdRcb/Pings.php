<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Pings
{
    function post($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\PingWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\PingWebhook($owner, $repo, $hook_id);
    }
}
