<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\MarketplacePurchases;

final class Stubbed
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbedOperation($per_page, $page);
    }
}
