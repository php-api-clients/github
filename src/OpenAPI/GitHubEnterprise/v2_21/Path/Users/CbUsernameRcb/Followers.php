<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\ListFollowersForUser;

final class Followers
{
    function get($username, int $per_page = 30, int $page = 1): ListFollowersForUser
    {
        return new ListFollowersForUser($username, $per_page, $page);
    }
}
