<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb;

final class Attempts
{
    function post($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery($org, $hook_id, $delivery_id);
    }
}
