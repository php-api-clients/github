<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Events
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicOrgEventsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicOrgEventsOperation($org, $per_page, $page);
    }
}
