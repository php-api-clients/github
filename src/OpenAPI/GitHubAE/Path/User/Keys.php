<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticated;

final class Keys
{
    function get(int $per_page = 30, int $page = 1): ListPublicSshKeysForAuthenticated
    {
        return new ListPublicSshKeysForAuthenticated($per_page, $page);
    }

    function post(): CreatePublicSshKeyForAuthenticated
    {
        return new CreatePublicSshKeyForAuthenticated();
    }
}
