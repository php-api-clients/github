<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreateGpgKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListGpgKeysForAuthenticated;

final class GpgKeys
{
    function get(int $per_page = 30, int $page = 1): ListGpgKeysForAuthenticated
    {
        return new ListGpgKeysForAuthenticated($per_page, $page);
    }

    function post(): CreateGpgKeyForAuthenticated
    {
        return new CreateGpgKeyForAuthenticated();
    }
}
