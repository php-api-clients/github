<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Migrations
{
    function get($org, int $per_page = 30, int $page = 1, $exclude) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListForOrgOperation($org, $per_page, $page, $exclude);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\StartForOrgOperation($org);
    }
}
