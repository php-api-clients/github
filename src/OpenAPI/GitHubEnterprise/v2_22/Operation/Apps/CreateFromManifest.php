<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateFromManifest
{
    private const OPERATION_ID = 'apps/create-from-manifest';
    public string $code;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($code)
    {
        $this->code = $code;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{code}'], [$this->code], '/app-manifests/{code}/conversions?'));
    }

    function validateResponse(): void
    {
    }
}
