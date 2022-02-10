<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries;

final class CbDeliveryIdRcb
{
    function get($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery($org, $hook_id, $delivery_id);
    }
}
