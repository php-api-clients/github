<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsOperation;

final class Events
{
    function get(int $per_page = 30, int $page = 1): ListPublicEventsOperation
    {
        return new ListPublicEventsOperation($per_page, $page);
    }
}
