<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveAnnouncement
{
    private const OPERATION_ID = 'enterprise-admin/remove-announcement';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace([], [], '/enterprise/announcement?'));
    }

    function validateResponse(): void
    {
    }
}
