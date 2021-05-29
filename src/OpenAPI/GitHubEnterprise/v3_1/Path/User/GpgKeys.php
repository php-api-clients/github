<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreateGpgKeyForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForAuthenticatedOperation;

final class GpgKeys
{
    function get(int $per_page = 30, int $page = 1): ListGpgKeysForAuthenticatedOperation
    {
        return new ListGpgKeysForAuthenticatedOperation($per_page, $page);
    }

    function post(): CreateGpgKeyForAuthenticatedOperation
    {
        return new CreateGpgKeyForAuthenticatedOperation();
    }
}
