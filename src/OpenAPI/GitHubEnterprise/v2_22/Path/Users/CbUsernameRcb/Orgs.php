<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs\ListForUserOperation;

final class Orgs
{
    function get($username, int $per_page = 30, int $page = 1): ListForUserOperation
    {
        return new ListForUserOperation($username, $per_page, $page);
    }
}
