<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\TeamSync;

final class Groups
{
    function get($org, int $per_page = 30, $page) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsForOrgOperation($org, $per_page, $page);
    }
}
