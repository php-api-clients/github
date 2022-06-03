<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Hook\Deliveries\CbDeliveryIdRcb;

final class Attempts
{
    function post($delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery($delivery_id);
    }
}
