<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Notifications\Threads\CbThreadIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\DeleteThreadSubscription;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\SetThreadSubscription;

final class Subscription
{
    function get($thread_id): GetThreadSubscriptionForAuthenticatedUser
    {
        return new GetThreadSubscriptionForAuthenticatedUser($thread_id);
    }

    function put($thread_id): SetThreadSubscription
    {
        return new SetThreadSubscription($thread_id);
    }

    function delete($thread_id): DeleteThreadSubscription
    {
        return new DeleteThreadSubscription($thread_id);
    }
}
