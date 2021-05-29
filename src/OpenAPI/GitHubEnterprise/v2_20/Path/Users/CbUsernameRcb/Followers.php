<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowersForUserOperation;

final class Followers
{
    function get($username, int $per_page = 30, int $page = 1): ListFollowersForUserOperation
    {
        return new ListFollowersForUserOperation($username, $per_page, $page);
    }
}
