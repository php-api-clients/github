<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\SetThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\SetThreadSubscription($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\DeleteThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\DeleteThreadSubscription($thread_id);
    }
}
