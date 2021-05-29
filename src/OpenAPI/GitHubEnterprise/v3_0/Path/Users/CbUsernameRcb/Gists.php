<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gists\ListForUserOperation;

final class Gists
{
    function get($username, $since, int $per_page = 30, int $page = 1): ListForUserOperation
    {
        return new ListForUserOperation($username, $since, $per_page, $page);
    }
}
