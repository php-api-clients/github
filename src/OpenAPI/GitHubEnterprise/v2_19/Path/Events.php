<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListPublicEvents;

final class Events
{
    function get(int $per_page = 30, int $page = 1): ListPublicEvents
    {
        return new ListPublicEvents($per_page, $page);
    }
}
