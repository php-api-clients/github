<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb\Events\Orgs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUser;

final class CbOrgRcb
{
    function get($username, $org, int $per_page = 30, int $page = 1): ListOrgEventsForAuthenticatedUser
    {
        return new ListOrgEventsForAuthenticatedUser($username, $org, $per_page, $page);
    }
}
