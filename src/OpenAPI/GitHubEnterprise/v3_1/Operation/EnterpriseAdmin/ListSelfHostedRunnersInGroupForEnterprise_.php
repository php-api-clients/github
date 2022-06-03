<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListSelfHostedRunnersInGroupForEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/list-self-hosted-runners-in-group-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $runner_group_id, int $per_page = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->runner_group_id = $runner_group_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{runner_group_id}', '{per_page}', '{page}'), array($this->enterprise, $this->runner_group_id, $this->per_page, $this->page), '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
