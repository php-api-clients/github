<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Plans\CbPlanIdRcb;

final class Accounts
{
    function get($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan($plan_id, $sort, $direction, $per_page, $page);
    }
}
