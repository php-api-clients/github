<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser;

final class Migrations
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUser
    {
        return new ListForAuthenticatedUser($per_page, $page);
    }

    function post(): StartForAuthenticatedUser
    {
        return new StartForAuthenticatedUser();
    }
}
