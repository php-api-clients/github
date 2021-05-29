<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser;

final class Repos
{
    function get($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1): ListForUser
    {
        return new ListForUser($username, $type, $sort, $direction, $per_page, $page);
    }
}
