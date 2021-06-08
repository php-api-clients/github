<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\ListForUser;

final class Projects
{
    function get($username, string $state = 'open', int $per_page = 30, int $page = 1): ListForUser
    {
        return new ListForUser($username, $state, $per_page, $page);
    }
}
