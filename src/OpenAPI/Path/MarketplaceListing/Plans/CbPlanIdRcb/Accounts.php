<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\MarketplaceListing\Plans\CbPlanIdRcb;

final class Accounts
{
    function get($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListAccountsForPlanOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListAccountsForPlanOperation($plan_id, $sort, $direction, $per_page, $page);
    }
}
