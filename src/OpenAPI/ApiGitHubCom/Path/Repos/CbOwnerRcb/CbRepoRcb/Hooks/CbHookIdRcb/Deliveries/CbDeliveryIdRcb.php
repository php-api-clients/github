<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries;

final class CbDeliveryIdRcb
{
    function get($owner, $repo, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery($owner, $repo, $hook_id, $delivery_id);
    }
}
