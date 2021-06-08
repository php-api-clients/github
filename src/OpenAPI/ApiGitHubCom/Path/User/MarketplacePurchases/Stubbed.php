<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\MarketplacePurchases;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed;

final class Stubbed
{
    function get(int $per_page = 30, int $page = 1): ListSubscriptionsForAuthenticatedUserStubbed
    {
        return new ListSubscriptionsForAuthenticatedUserStubbed($per_page, $page);
    }
}
