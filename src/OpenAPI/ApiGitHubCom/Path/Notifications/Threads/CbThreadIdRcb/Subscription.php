<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetThreadSubscriptionOperation($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteThreadSubscriptionOperation($thread_id);
    }
}
