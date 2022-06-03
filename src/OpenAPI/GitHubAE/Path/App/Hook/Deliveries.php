<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\App\Hook;

final class Deliveries
{
    function get(int $per_page = 30, $cursor) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries($per_page, $cursor);
    }
}
