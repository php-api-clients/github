<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class DisableSelectedOrganizationGithubActionsEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/disable-selected-organization-github-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**The unique identifier of the organization.**/
    private readonly int $org_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, int $org_id)
    {
        $this->enterprise = $enterprise;
        $this->org_id = $org_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{enterprise}', '{org_id}'), array($this->enterprise, $this->org_id), '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}'));
    }
    function validateResponse()
    {
    }
}
