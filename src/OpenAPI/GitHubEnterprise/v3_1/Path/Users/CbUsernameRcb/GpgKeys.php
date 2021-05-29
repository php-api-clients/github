<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForUser;

final class GpgKeys
{
    function get($username, int $per_page = 30, int $page = 1): ListGpgKeysForUser
    {
        return new ListGpgKeysForUser($username, $per_page, $page);
    }
}