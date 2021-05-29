<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForAuthenticatedUserOperation;

final class Projects
{
    function post(): CreateForAuthenticatedUserOperation
    {
        return new CreateForAuthenticatedUserOperation();
    }
}
