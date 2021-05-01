<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs;

final class List
{
    private const OPERATION_ID = 'orgs/list';
    /**An organization ID. Only return organizations with an ID greater than this ID.**/
    public int $since;
    /**Results per page (max 100).**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($since, int $per_page = 30)
    {
        $this->since = $since;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{since}', '{per_page}'), array($this->since, $this->per_page), '/organizations?since={since}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
