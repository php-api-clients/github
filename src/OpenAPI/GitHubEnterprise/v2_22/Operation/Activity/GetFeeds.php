<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetFeeds
{
    private const OPERATION_ID = 'activity/get-feeds';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/feeds?'));
    }

    function validateResponse(): void
    {
    }
}
