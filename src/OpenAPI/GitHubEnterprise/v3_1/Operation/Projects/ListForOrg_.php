<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

final class ListForOrg_
{
    private const OPERATION_ID = 'projects/list-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    private readonly string $state;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->state = $state;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{state}', '{per_page}', '{page}'), array($this->org, $this->state, $this->per_page, $this->page), '/orgs/{org}/projects?state={state}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
