<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb;

final class Following
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowingForUserOperation($username, $per_page, $page);
    }
}
