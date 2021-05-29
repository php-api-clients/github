<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\CreateForAuthenticatedUserOperation;

final class Projects
{
    function post(): CreateForAuthenticatedUserOperation
    {
        return new CreateForAuthenticatedUserOperation();
    }
}
