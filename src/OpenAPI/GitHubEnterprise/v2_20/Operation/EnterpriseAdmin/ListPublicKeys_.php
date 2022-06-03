<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

final class ListPublicKeys_
{
    private const OPERATION_ID = 'enterprise-admin/list-public-keys';
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /****/
    public string $sort;
    /**Only show public keys accessed after the given time.**/
    public string $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since)
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
