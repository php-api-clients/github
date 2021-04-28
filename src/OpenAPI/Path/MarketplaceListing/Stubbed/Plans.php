<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\MarketplaceListing\Stubbed;

final class Plans
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListPlansStubbedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ListPlansStubbedOperation($per_page, $page);
    }
}
