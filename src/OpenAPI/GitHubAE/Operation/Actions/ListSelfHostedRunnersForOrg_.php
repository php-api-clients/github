<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListSelfHostedRunnersForOrg_
{
    private const OPERATION_ID = 'actions/list-self-hosted-runners-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}'), array($this->org, $this->per_page, $this->page), '/orgs/{org}/actions/runners?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
