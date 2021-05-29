<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Projects\ListForUserOperation;

final class Projects
{
    function get($username, string $state = 'open', int $per_page = 30, int $page = 1): ListForUserOperation
    {
        return new ListForUserOperation($username, $state, $per_page, $page);
    }
}
