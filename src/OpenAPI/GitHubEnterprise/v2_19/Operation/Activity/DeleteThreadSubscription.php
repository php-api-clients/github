<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteThreadSubscription
{
    private const OPERATION_ID = 'activity/delete-thread-subscription';
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
        return new Request('delete', str_replace(['{thread_id}'], [$this->thread_id], '/notifications/threads/{thread_id}/subscription?'));
    }

    function validateResponse(): void
    {
    }
}
