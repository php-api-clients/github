<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Teams
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListOperation($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOperation($org);
    }
}
