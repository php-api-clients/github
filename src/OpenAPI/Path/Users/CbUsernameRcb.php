<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\GetByUsernameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\GetByUsernameOperation($username);
    }
}
