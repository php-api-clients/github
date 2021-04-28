<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class MarketplacePurchases
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListSubscriptionsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListSubscriptionsForAuthenticatedUserOperation($per_page, $page);
    }
}
