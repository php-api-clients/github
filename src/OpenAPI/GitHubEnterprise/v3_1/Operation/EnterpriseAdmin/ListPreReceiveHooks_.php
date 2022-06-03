<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListPreReceiveHooks_
{
    private const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks';
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The direction to sort the results by.**/
    public string $direction;
    /**The property to sort the results by.**/
    public string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{direction}', '{sort}'), array($this->per_page, $this->page, $this->direction, $this->sort), '/admin/pre-receive-hooks?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
