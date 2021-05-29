<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedOperation;

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
