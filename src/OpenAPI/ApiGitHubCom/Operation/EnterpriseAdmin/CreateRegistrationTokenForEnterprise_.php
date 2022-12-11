<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class CreateRegistrationTokenForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/create-registration-token-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise)
    {
        $this->enterprise = $enterprise;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{enterprise}'), array($this->enterprise), '/enterprises/{enterprise}/actions/runners/registration-token'));
    }
    function validateResponse()
    {
    }
}
