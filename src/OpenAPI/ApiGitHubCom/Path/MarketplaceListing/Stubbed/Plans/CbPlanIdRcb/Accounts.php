<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbedOperation;

final class Accounts
{
    function get($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): ListAccountsForPlanStubbedOperation
    {
        return new ListAccountsForPlanStubbedOperation($plan_id, $sort, $direction, $per_page, $page);
    }
}
