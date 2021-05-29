<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateSelfHostedRunnerGroupForEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/create-self-hosted-runner-group-for-enterprise';
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
        return new Request('post', str_replace(['{enterprise}'], [$this->enterprise], '/enterprises/{enterprise}/actions/runner-groups?'));
    }

    function validateResponse(): void
    {
    }
}
