<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Config
{
    function get($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetWebhookConfigForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetWebhookConfigForRepoOperation($owner, $repo, $hook_id);
    }
    function patch($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateWebhookConfigForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateWebhookConfigForRepoOperation($owner, $repo, $hook_id);
    }
}
