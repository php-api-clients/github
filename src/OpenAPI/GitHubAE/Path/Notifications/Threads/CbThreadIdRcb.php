<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Notifications\Threads;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetThread;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkThreadAsRead;

final class CbThreadIdRcb
{
    function get($thread_id): GetThread
    {
        return new GetThread($thread_id);
    }

    function patch($thread_id): MarkThreadAsRead
    {
        return new MarkThreadAsRead($thread_id);
    }
}
