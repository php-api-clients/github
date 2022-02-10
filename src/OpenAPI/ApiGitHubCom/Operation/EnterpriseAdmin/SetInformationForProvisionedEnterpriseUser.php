<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class SetInformationForProvisionedEnterpriseUser
{
    private const OPERATION_ID = 'enterprise-admin/set-information-for-provisioned-enterprise-user';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**scim_user_id parameter**/
    public string $scim_user_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $scim_user_id)
    {
        $this->enterprise = $enterprise;
        $this->scim_user_id = $scim_user_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{enterprise}', '{scim_user_id}'), array($this->enterprise, $this->scim_user_id), '/scim/v2/enterprises/{enterprise}/Users/{scim_user_id}?'));
    }
    function validateResponse()
    {
    }
}
