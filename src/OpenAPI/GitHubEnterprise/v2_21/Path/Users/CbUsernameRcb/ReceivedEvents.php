<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\ListReceivedEventsForUser;

final class ReceivedEvents
{
    function get($username, int $per_page = 30, int $page = 1): ListReceivedEventsForUser
    {
        return new ListReceivedEventsForUser($username, $per_page, $page);
    }
}
