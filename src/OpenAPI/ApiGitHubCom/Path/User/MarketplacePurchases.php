<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserOperation;

final class MarketplacePurchases
{
    function get(int $per_page = 30, int $page = 1): ListSubscriptionsForAuthenticatedUserOperation
    {
        return new ListSubscriptionsForAuthenticatedUserOperation($per_page, $page);
    }
}
