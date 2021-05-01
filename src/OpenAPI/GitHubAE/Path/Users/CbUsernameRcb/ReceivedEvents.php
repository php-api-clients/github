<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Users\CbUsernameRcb;

final class ReceivedEvents
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReceivedEventsForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReceivedEventsForUserOperation($username, $per_page, $page);
    }
}
