<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Licenses;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Get
{
    private const OPERATION_ID = 'licenses/get';
    public string $license;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($license)
    {
        $this->license = $license;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{license}'], [$this->license], '/licenses/{license}?'));
    }

    function validateResponse(): void
    {
    }
}
