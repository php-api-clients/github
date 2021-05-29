<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListPublicEvents;

final class Events
{
    function get(int $per_page = 30, int $page = 1): ListPublicEvents
    {
        return new ListPublicEvents($per_page, $page);
    }
}
