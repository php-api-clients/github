<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb\ReceivedEvents;

final class Public
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\ListReceivedPublicEventsForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\ListReceivedPublicEventsForUser($username, $per_page, $page);
    }
}
