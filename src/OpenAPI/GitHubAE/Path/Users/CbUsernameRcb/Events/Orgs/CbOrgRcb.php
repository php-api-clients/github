<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb\Events\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUserOperation;

final class CbOrgRcb
{
    function get($username, $org, int $per_page = 30, int $page = 1): ListOrgEventsForAuthenticatedUserOperation
    {
        return new ListOrgEventsForAuthenticatedUserOperation($username, $org, $per_page, $page);
    }
}
