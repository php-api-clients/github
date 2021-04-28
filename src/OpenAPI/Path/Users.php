<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Users
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListOperation($since, $per_page);
    }
}
