<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class CreateRemoveTokenForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/create-remove-token-for-enterprise';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{enterprise}'), array($this->enterprise), '/enterprises/{enterprise}/actions/runners/remove-token'));
    }
    function validateResponse()
    {
    }
}
