<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class AddCustomLabelsToSelfHostedRunnerForEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/add-custom-labels-to-self-hosted-runner-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $runner_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{enterprise}', '{runner_id}'), array($this->enterprise, $this->runner_id), '/enterprises/{enterprise}/actions/runners/{runner_id}/labels?'));
    }
    function validateResponse()
    {
    }
}
