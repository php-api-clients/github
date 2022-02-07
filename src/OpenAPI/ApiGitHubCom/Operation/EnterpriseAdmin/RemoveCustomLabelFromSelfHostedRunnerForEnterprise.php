<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class RemoveCustomLabelFromSelfHostedRunnerForEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/remove-custom-label-from-self-hosted-runner-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;
    /**The name of a self-hosted runner's custom label.**/
    public string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $runner_id, $name)
    {
        $this->enterprise = $enterprise;
        $this->runner_id = $runner_id;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{runner_id}', '{name}'), array($this->enterprise, $this->runner_id, $this->name), '/enterprises/{enterprise}/actions/runners/{runner_id}/labels/{name}?'));
    }
    function validateResponse()
    {
    }
}
