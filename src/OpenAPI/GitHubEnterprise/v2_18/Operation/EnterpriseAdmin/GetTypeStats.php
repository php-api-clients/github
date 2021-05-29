<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetTypeStats
{
    private const OPERATION_ID = 'enterprise-admin/get-type-stats';
    public string $type;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($type)
    {
        $this->type = $type;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{type}'], [$this->type], '/enterprise/stats/{type}?'));
    }

    function validateResponse(): void
    {
    }
}
