<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetThreadSubscriptionOperation($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteThreadSubscriptionOperation($thread_id);
    }
}
