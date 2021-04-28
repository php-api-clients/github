<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Orgs
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListForAuthenticatedUserOperation($per_page, $page);
    }
}
