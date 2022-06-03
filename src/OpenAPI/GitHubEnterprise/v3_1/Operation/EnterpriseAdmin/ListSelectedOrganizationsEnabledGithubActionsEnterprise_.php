<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListSelectedOrganizationsEnabledGithubActionsEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/list-selected-organizations-enabled-github-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, int $per_page = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{per_page}', '{page}'), array($this->enterprise, $this->per_page, $this->page), '/enterprises/{enterprise}/actions/permissions/organizations?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
