<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Notifications\Threads;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetThreadOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkThreadAsReadOperation;

final class CbThreadIdRcb
{
    function get($thread_id): GetThreadOperation
    {
        return new GetThreadOperation($thread_id);
    }

    function patch($thread_id): MarkThreadAsReadOperation
    {
        return new MarkThreadAsReadOperation($thread_id);
    }
}
