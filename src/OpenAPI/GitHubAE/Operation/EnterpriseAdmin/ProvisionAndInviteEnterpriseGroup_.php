<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class ProvisionAndInviteEnterpriseGroup_
{
    private const OPERATION_ID = 'enterprise-admin/provision-and-invite-enterprise-group';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{enterprise}'), array($this->enterprise), '/scim/v2/enterprises/{enterprise}/Groups'));
    }
    function validateResponse()
    {
    }
}
