<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class DeleteSelfHostedRunnerGroupFromEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/delete-self-hosted-runner-group-from-enterprise';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{runner_group_id}'), array($this->enterprise, $this->runner_group_id), '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}?'));
    }
    function validateResponse()
    {
    }
}
