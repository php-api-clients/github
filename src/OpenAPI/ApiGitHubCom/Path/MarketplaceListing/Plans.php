<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\MarketplaceListing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansOperation;

final class Plans
{
    function get(int $per_page = 30, int $page = 1): ListPlansOperation
    {
        return new ListPlansOperation($per_page, $page);
    }
}
