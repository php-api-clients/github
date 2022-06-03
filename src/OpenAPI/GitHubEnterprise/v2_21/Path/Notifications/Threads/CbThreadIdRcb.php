<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Notifications\Threads;

final class CbThreadIdRcb
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\GetThread
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\GetThread($thread_id);
    }
    function patch($thread_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\MarkThreadAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\MarkThreadAsRead($thread_id);
    }
}
