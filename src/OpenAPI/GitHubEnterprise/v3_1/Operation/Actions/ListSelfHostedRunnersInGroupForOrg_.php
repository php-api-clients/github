<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class ListSelfHostedRunnersInGroupForOrg_
{
    private const OPERATION_ID = 'actions/list-self-hosted-runners-in-group-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private readonly int $runner_group_id;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $runner_group_id, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{runner_group_id}', '{per_page}', '{page}'), array($this->org, $this->runner_group_id, $this->per_page, $this->page), '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
