<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListForAuthenticatedUserOperation;

final class Teams
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUserOperation
    {
        return new ListForAuthenticatedUserOperation($per_page, $page);
    }
}
