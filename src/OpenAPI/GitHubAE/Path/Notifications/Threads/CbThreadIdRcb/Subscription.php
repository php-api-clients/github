<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscription($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscription($thread_id);
    }
}
