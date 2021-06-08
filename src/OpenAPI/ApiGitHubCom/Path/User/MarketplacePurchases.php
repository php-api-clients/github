<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser;

final class MarketplacePurchases
{
    function get(int $per_page = 30, int $page = 1): ListSubscriptionsForAuthenticatedUser
    {
        return new ListSubscriptionsForAuthenticatedUser($per_page, $page);
    }
}
