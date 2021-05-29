<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedOperation;

final class Following
{
    function get(int $per_page = 30, int $page = 1): ListFollowedByAuthenticatedOperation
    {
        return new ListFollowedByAuthenticatedOperation($per_page, $page);
    }
}
