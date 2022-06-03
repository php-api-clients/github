<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class SetAllowedActionsEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/set-allowed-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise)
    {
        $this->enterprise = $enterprise;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{enterprise}'), array($this->enterprise), '/enterprises/{enterprise}/actions/permissions/selected-actions?'));
    }
    function validateResponse()
    {
    }
}
