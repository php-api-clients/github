<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetSharedStorageBillingOrg
{
    private const OPERATION_ID = 'billing/get-shared-storage-billing-org';
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
        return new Request('get', str_replace(['{org}'], [$this->org], '/orgs/{org}/settings/billing/shared-storage?'));
    }

    function validateResponse(): void
    {
    }
}
