<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticated;

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
