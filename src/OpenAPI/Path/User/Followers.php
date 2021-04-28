<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Followers
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowersForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowersForAuthenticatedUserOperation($per_page, $page);
    }
}
