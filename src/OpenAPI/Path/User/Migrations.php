<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Migrations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListForAuthenticatedUserOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartForAuthenticatedUserOperation();
    }
}
