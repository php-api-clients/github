<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateUserOperation;

final class Users
{
    function post(): CreateUserOperation
    {
        return new CreateUserOperation();
    }
}
