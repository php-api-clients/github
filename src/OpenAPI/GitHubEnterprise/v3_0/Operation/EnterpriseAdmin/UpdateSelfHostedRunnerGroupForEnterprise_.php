<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class UpdateSelfHostedRunnerGroupForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/update-self-hosted-runner-group-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $runner_group_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_group_id = $runner_group_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{enterprise}', '{runner_group_id}'), array($this->enterprise, $this->runner_group_id), '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}?'));
    }
    function validateResponse()
    {
    }
}
