<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Notifications\Threads;

final class CbThreadIdRcb
{
    function get($thread_id) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\GetThreadOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\GetThreadOperation($thread_id);
    }
    function patch($thread_id) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\MarkThreadAsReadOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\MarkThreadAsReadOperation($thread_id);
    }
}
