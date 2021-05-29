<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListReceivedEventsForUserOperation;

final class ReceivedEvents
{
    function get($username, int $per_page = 30, int $page = 1): ListReceivedEventsForUserOperation
    {
        return new ListReceivedEventsForUserOperation($username, $per_page, $page);
    }
}
