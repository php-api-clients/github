<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUserOperation;

final class Following
{
    function get($username, int $per_page = 30, int $page = 1): ListFollowingForUserOperation
    {
        return new ListFollowingForUserOperation($username, $per_page, $page);
    }
}
