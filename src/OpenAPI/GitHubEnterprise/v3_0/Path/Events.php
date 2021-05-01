<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

final class Events
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListPublicEventsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListPublicEventsOperation($per_page, $page);
    }
}