<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

final class ListRepoAccessToSelfHostedRunnerGroupInOrg_
{
    private const OPERATION_ID = 'actions/list-repo-access-to-self-hosted-runner-group-in-org';
    /****/
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100)**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_group_id, int $page = 1, int $per_page = 30)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{runner_group_id}', '{page}', '{per_page}'), array($this->org, $this->runner_group_id, $this->page, $this->per_page), '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
