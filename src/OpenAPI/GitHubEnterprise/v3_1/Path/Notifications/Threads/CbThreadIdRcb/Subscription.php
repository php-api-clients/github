<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Notifications\Threads\CbThreadIdRcb;

final class Subscription
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetThreadSubscriptionForAuthenticatedUserOperation($thread_id);
    }
    function put($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\SetThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\SetThreadSubscriptionOperation($thread_id);
    }
    function delete($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\DeleteThreadSubscriptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\DeleteThreadSubscriptionOperation($thread_id);
    }
}
