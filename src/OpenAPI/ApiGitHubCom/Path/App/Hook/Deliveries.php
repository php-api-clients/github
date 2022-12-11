<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Hook;

final class Deliveries
{
    function get(int $per_page = 30, $cursor, $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries($per_page, $cursor, $redelivery);
    }
}
