<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Hooks\CbHookIdRcb;

final class Deliveries
{
    function get($org, $hook_id, int $per_page = 30, $cursor, $redelivery) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhookDeliveries($org, $hook_id, $per_page, $cursor, $redelivery);
    }
}
