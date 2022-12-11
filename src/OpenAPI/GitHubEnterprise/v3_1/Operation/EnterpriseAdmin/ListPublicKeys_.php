<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class ListPublicKeys_
{
    private const OPERATION_ID = 'enterprise-admin/list-public-keys';
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    private readonly string $sort;
    /**Only show public keys accessed after the given time.**/
    private readonly string $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', string $since)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->since = $since;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{direction}', '{sort}', '{since}'), array($this->per_page, $this->page, $this->direction, $this->sort, $this->since), '/admin/keys?per_page={per_page}&page={page}&direction={direction}&sort={sort}&since={since}'));
    }
    function validateResponse()
    {
    }
}
