<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Hook\Deliveries;

final class CbDeliveryIdRcb
{
    function get($delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery($delivery_id);
    }
}
