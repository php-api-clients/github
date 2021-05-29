<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetGithubPackagesBillingGhe
{
    private const OPERATION_ID = 'billing/get-github-packages-billing-ghe';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise)
    {
        $this->enterprise = $enterprise;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{enterprise}'], [$this->enterprise], '/enterprises/{enterprise}/settings/billing/packages?'));
    }

    function validateResponse(): void
    {
    }
}
