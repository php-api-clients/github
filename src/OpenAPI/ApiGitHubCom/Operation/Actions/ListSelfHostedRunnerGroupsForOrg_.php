<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListSelfHostedRunnerGroupsForOrg_
{
    private const OPERATION_ID = 'actions/list-self-hosted-runner-groups-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Only return runner groups that are allowed to be used by this repository.**/
    private readonly string $visible_to_repository;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $per_page = 30, int $page = 1, string $visible_to_repository)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->visible_to_repository = $visible_to_repository;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}', '{visible_to_repository}'), array($this->org, $this->per_page, $this->page, $this->visible_to_repository), '/orgs/{org}/actions/runner-groups?per_page={per_page}&page={page}&visible_to_repository={visible_to_repository}'));
    }
    function validateResponse()
    {
    }
}
