<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateOrgName
{
    private const OPERATION_ID = 'enterprise-admin/update-org-name';
    public string $org;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org)
    {
        $this->org = $org;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{org}'], [$this->org], '/admin/organizations/{org}?'));
    }

    function validateResponse(): void
    {
    }
}
