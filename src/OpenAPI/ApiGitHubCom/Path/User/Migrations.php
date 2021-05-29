<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUserOperation;

final class Migrations
{
    function get(int $per_page = 30, int $page = 1): ListForAuthenticatedUserOperation
    {
        return new ListForAuthenticatedUserOperation($per_page, $page);
    }

    function post(): StartForAuthenticatedUserOperation
    {
        return new StartForAuthenticatedUserOperation();
    }
}
