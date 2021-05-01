<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListBlockedUsers
{
    private const OPERATION_ID = 'orgs/list-blocked-users';
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/blocks?'));
    }
    function validateResponse()
    {
    }
}