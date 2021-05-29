<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Notifications\Threads\CbThreadIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\DeleteThreadSubscriptionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\SetThreadSubscriptionOperation;

final class Subscription
{
    function get($thread_id): GetThreadSubscriptionForAuthenticatedUserOperation
    {
        return new GetThreadSubscriptionForAuthenticatedUserOperation($thread_id);
    }

    function put($thread_id): SetThreadSubscriptionOperation
    {
        return new SetThreadSubscriptionOperation($thread_id);
    }

    function delete($thread_id): DeleteThreadSubscriptionOperation
    {
        return new DeleteThreadSubscriptionOperation($thread_id);
    }
}
