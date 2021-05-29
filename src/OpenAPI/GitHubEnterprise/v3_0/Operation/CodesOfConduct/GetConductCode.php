<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodesOfConduct;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetConductCode
{
    private const OPERATION_ID = 'codes-of-conduct/get-conduct-code';
    public string $key;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($key)
    {
        $this->key = $key;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{key}'], [$this->key], '/codes_of_conduct/{key}?'));
    }

    function validateResponse(): void
    {
    }
}
