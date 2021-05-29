<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedOperation;

final class Following
{
    function get(int $per_page = 30, int $page = 1): ListFollowedByAuthenticatedOperation
    {
        return new ListFollowedByAuthenticatedOperation($per_page, $page);
    }
}
