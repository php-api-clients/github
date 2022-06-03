<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

final class Events
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\ListPublicEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\ListPublicEvents($per_page, $page);
    }
}
