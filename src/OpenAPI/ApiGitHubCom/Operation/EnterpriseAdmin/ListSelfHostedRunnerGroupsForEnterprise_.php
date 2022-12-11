<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class ListSelfHostedRunnerGroupsForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/list-self-hosted-runner-groups-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Only return runner groups that are allowed to be used by this organization.**/
    private readonly string $visible_to_organization;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, int $per_page = 30, int $page = 1, string $visible_to_organization)
    {
        $this->enterprise = $enterprise;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->visible_to_organization = $visible_to_organization;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{per_page}', '{page}', '{visible_to_organization}'), array($this->enterprise, $this->per_page, $this->page, $this->visible_to_organization), '/enterprises/{enterprise}/actions/runner-groups?per_page={per_page}&page={page}&visible_to_organization={visible_to_organization}'));
    }
    function validateResponse()
    {
    }
}
