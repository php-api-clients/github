<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\CodesOfConduct;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAllCodesOfConduct
{
    private const OPERATION_ID = 'codes-of-conduct/get-all-codes-of-conduct';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/codes_of_conduct?'));
    }

    function validateResponse(): void
    {
    }
}
