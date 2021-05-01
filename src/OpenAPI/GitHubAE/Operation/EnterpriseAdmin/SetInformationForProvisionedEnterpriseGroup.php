<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class SetInformationForProvisionedEnterpriseGroup
{
    private const OPERATION_ID = 'enterprise-admin/set-information-for-provisioned-enterprise-group';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Identifier generated by the GitHub SCIM endpoint.**/
    public string $scim_group_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $scim_group_id)
    {
        $this->enterprise = $enterprise;
        $this->scim_group_id = $scim_group_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{enterprise}', '{scim_group_id}'), array($this->enterprise, $this->scim_group_id), '/scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}?'));
    }
    function validateResponse()
    {
    }
}
