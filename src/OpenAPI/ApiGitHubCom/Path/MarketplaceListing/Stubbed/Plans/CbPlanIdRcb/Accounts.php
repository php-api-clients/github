<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb;

final class Accounts
{
    function get($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed($plan_id, $sort, $direction, $per_page, $page);
    }
}
