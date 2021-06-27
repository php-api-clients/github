<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Events
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListPublicEvents($per_page, $page);
    }
}
