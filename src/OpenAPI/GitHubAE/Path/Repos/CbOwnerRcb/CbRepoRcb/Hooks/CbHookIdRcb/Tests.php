<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Tests
{
    function post($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\TestPushWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\TestPushWebhook($owner, $repo, $hook_id);
    }
}
