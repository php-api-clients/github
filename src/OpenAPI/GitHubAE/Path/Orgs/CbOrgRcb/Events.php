<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListPublicOrgEvents;

final class Events
{
    function get($org, int $per_page = 30, int $page = 1): ListPublicOrgEvents
    {
        return new ListPublicOrgEvents($org, $per_page, $page);
    }
}
