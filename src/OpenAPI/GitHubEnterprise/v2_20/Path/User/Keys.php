<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreatePublicSshKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicSshKeysForAuthenticated;

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
