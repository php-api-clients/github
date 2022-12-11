<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/remove-org-access-to-self-hosted-runner-group-in-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private readonly int $runner_group_id;
    /**The unique identifier of the organization.**/
    private readonly int $org_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, int $runner_group_id, int $org_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_group_id = $runner_group_id;
        $this->org_id = $org_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{runner_group_id}', '{org_id}'), array($this->enterprise, $this->runner_group_id, $this->org_id), '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}'));
    }
    function validateResponse()
    {
    }
}
