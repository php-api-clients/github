<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\CreateUserOperation;

final class Users
{
    function post(): CreateUserOperation
    {
        return new CreateUserOperation();
    }
}
