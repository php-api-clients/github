<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb;

final class Attempts
{
    function post($owner, $repo, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RedeliverWebhookDelivery($owner, $repo, $hook_id, $delivery_id);
    }
}
