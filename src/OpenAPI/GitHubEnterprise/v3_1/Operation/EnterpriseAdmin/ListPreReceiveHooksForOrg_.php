<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListPreReceiveHooksForOrg_
{
    private const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**The sort order for the response collection.**/
    private readonly string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}', '{direction}', '{sort}'), array($this->org, $this->per_page, $this->page, $this->direction, $this->sort), '/orgs/{org}/pre-receive-hooks?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
