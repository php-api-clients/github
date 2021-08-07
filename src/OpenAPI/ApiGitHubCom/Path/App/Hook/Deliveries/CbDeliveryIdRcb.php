<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Hook\Deliveries;

final class CbDeliveryIdRcb
{
    function get($delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery($delivery_id);
    }
}
