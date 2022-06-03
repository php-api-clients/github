<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Config
{
    function get($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetWebhookConfigForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetWebhookConfigForRepo($owner, $repo, $hook_id);
    }
    function patch($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateWebhookConfigForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateWebhookConfigForRepo($owner, $repo, $hook_id);
    }
}
