<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Events
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicEventsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicEventsOperation($per_page, $page);
    }
}
