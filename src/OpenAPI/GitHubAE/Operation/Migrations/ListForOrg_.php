<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations;

final class ListForOrg_
{
    private const OPERATION_ID = 'migrations/list-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Exclude attributes from the API response to improve performance**/
    private readonly array $exclude;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $per_page = 30, int $page = 1, array $exclude)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->exclude = $exclude;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}', '{exclude}'), array($this->org, $this->per_page, $this->page, $this->exclude), '/orgs/{org}/migrations?per_page={per_page}&page={page}&exclude={exclude}'));
    }
    function validateResponse()
    {
    }
}
