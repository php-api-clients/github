<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Deliveries
{
    function get($owner, $repo, $hook_id, int $per_page = 30, $cursor) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListWebhookDeliveries($owner, $repo, $hook_id, $per_page, $cursor);
    }
}
