<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetSelfHostedRunnerForEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/get-self-hosted-runner-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $runner_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_id  = $runner_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{enterprise}', '{runner_id}'], [$this->enterprise, $this->runner_id], '/enterprises/{enterprise}/actions/runners/{runner_id}?'));
    }

    function validateResponse(): void
    {
    }
}
