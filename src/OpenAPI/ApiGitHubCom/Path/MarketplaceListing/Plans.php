<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans;

final class Plans
{
    function get(int $per_page = 30, int $page = 1): ListPlans
    {
        return new ListPlans($per_page, $page);
    }
}
