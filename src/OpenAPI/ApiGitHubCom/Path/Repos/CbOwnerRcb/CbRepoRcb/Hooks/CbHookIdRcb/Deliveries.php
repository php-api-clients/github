<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb;

final class Deliveries
{
    function get($owner, $repo, $hook_id, int $per_page = 30, $cursor, $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries($owner, $repo, $hook_id, $per_page, $cursor, $redelivery);
    }
}
