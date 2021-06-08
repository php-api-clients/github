<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateWebhookConfigForApp
{
    private const OPERATION_ID = 'apps/update-webhook-config-for-app';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace([], [], '/app/hook/config?'));
    }

    function validateResponse(): void
    {
    }
}
