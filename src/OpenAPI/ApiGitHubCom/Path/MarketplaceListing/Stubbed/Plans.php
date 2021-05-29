<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing\Stubbed;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbedOperation;

final class Plans
{
    function get(int $per_page = 30, int $page = 1): ListPlansStubbedOperation
    {
        return new ListPlansStubbedOperation($per_page, $page);
    }
}
