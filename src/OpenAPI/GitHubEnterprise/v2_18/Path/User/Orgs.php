<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs\ListForAuthenticatedUser;

final class Orgs
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUser
    {
        return new ListForAuthenticatedUser($per_page, $page);
    }
}
