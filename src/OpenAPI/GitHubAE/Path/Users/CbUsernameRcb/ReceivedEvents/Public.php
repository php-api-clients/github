<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Users\CbUsernameRcb\ReceivedEvents;

final class Public
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReceivedPublicEventsForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReceivedPublicEventsForUserOperation($username, $per_page, $page);
    }
}