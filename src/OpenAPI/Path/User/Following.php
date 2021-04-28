<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Following
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListFollowedByAuthenticatedOperation($per_page, $page);
    }
}
