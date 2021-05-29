<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\ListPublicKeysForUser;

final class Keys
{
    function get($username, int $per_page = 30, int $page = 1): ListPublicKeysForUser
    {
        return new ListPublicKeysForUser($username, $per_page, $page);
    }
}
