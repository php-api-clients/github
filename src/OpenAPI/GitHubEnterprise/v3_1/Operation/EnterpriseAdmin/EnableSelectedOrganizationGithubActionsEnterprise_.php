<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class EnableSelectedOrganizationGithubActionsEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/enable-selected-organization-github-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**The unique identifier of the organization.**/
    public int $org_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $org_id)
    {
        $this->enterprise = $enterprise;
        $this->org_id = $org_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{enterprise}', '{org_id}'), array($this->enterprise, $this->org_id), '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}?'));
    }
    function validateResponse()
    {
    }
}
