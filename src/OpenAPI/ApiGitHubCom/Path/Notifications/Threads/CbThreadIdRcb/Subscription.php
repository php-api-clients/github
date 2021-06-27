<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUser($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscription($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscription($thread_id);
    }
}
