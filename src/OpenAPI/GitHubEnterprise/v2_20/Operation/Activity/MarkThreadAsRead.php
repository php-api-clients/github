<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class MarkThreadAsRead
{
    private const OPERATION_ID = 'activity/mark-thread-as-read';
    /**thread_id parameter**/
    public int $thread_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($thread_id)
    {
        $this->thread_id = $thread_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{thread_id}'], [$this->thread_id], '/notifications/threads/{thread_id}?'));
    }

    function validateResponse(): void
    {
    }
}
