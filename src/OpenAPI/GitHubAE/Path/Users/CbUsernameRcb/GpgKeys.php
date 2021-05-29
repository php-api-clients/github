<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUserOperation;

final class GpgKeys
{
    function get($username, int $per_page = 30, int $page = 1): ListGpgKeysForUserOperation
    {
        return new ListGpgKeysForUserOperation($username, $per_page, $page);
    }
}
