<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Migrations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUserOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUserOperation();
    }
}
