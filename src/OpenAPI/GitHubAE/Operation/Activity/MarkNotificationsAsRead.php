<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class MarkNotificationsAsRead
{
    private const OPERATION_ID = 'activity/mark-notifications-as-read';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace([], [], '/notifications?'));
    }

    function validateResponse(): void
    {
    }
}
