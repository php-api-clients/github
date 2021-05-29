<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreatePublicSshKeyForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListPublicSshKeysForAuthenticatedOperation;

final class Keys
{
    function get(int $per_page = 30, int $page = 1): ListPublicSshKeysForAuthenticatedOperation
    {
        return new ListPublicSshKeysForAuthenticatedOperation($per_page, $page);
    }

    function post(): CreatePublicSshKeyForAuthenticatedOperation
    {
        return new CreatePublicSshKeyForAuthenticatedOperation();
    }
}
