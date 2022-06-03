<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb;

final class Attempts
{
    function post($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RedeliverWebhookDelivery($org, $hook_id, $delivery_id);
    }
}
