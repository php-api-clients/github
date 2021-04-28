<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb;

final class Keys
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicKeysForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicKeysForUserOperation($username, $per_page, $page);
    }
}
