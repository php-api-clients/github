<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListForAuthenticatedUserOperation;

final class Orgs
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUserOperation
    {
        return new ListForAuthenticatedUserOperation($per_page, $page);
    }
}
