<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUserOperation;

final class Projects
{
    function post(): CreateForAuthenticatedUserOperation
    {
        return new CreateForAuthenticatedUserOperation();
    }
}
