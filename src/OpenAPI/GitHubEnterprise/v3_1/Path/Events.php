<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Events
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsOperation($per_page, $page);
    }
}
