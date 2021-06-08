<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\CreateForAuthenticatedUser;

final class Projects
{
    function post(): CreateForAuthenticatedUser
    {
        return new CreateForAuthenticatedUser();
    }
}
