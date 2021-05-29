<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/set-org-access-to-self-hosted-runner-group-in-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $runner_group_id)
    {
        $this->enterprise      = $enterprise;
        $this->runner_group_id = $runner_group_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{enterprise}', '{runner_group_id}'], [$this->enterprise, $this->runner_group_id], '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations?'));
    }

    function validateResponse(): void
    {
    }
}
