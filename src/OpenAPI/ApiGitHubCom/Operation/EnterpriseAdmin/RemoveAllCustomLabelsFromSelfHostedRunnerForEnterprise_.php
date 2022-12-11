<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/remove-all-custom-labels-from-self-hosted-runner-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    private readonly int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, int $runner_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{runner_id}'), array($this->enterprise, $this->runner_id), '/enterprises/{enterprise}/actions/runners/{runner_id}/labels'));
    }
    function validateResponse()
    {
    }
}
