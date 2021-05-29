<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateUserOperation;

final class Users
{
    function post(): CreateUserOperation
    {
        return new CreateUserOperation();
    }
}
