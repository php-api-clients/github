<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Plans\CbPlanIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanOperation;

final class Accounts
{
    function get($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): ListAccountsForPlanOperation
    {
        return new ListAccountsForPlanOperation($plan_id, $sort, $direction, $per_page, $page);
    }
}
