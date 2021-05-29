<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\MarketplacePurchases;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbedOperation;

final class Stubbed
{
    function get(int $per_page = 30, int $page = 1): ListSubscriptionsForAuthenticatedUserStubbedOperation
    {
        return new ListSubscriptionsForAuthenticatedUserStubbedOperation($per_page, $page);
    }
}
