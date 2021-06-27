<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Notifications\Threads;

final class CbThreadIdRcb
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThread($thread_id);
    }
    function patch($thread_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsRead($thread_id);
    }
}
