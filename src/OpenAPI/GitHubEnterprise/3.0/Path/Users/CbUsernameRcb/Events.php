<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Users\CbUsernameRcb;

final class Events
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Activity\ListEventsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Activity\ListEventsForAuthenticatedUserOperation($username, $per_page, $page);
    }
}
