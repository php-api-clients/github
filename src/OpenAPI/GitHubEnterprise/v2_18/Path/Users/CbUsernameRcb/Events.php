<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\ListEventsForAuthenticatedUser;

final class Events
{
    function get($username, int $per_page = 30, int $page = 1): ListEventsForAuthenticatedUser
    {
        return new ListEventsForAuthenticatedUser($username, $per_page, $page);
    }
}
