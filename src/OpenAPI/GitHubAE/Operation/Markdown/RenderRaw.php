<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RenderRaw
{
    private const OPERATION_ID = 'markdown/render-raw';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace([], [], '/markdown/raw?'));
    }

    function validateResponse(): void
    {
    }
}
