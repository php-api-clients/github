<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser;

final class Followers
{
    function get(int $per_page = 30, int $page = 1): ListFollowersForAuthenticatedUser
    {
        return new ListFollowersForAuthenticatedUser($per_page, $page);
    }
}
