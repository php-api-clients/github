<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class DeleteUserFromEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/delete-user-from-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**The unique identifier of the SCIM user.**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{scim_user_id}'), array($this->enterprise, $this->scim_user_id), '/scim/v2/enterprises/{enterprise}/Users/{scim_user_id}?'));
    }
    function validateResponse()
    {
    }
}
