<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Migrations;

final class StartForOrg
{
    private const OPERATION_ID = 'migrations/start-for-org';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/migrations?'));
    }
    function validateResponse()
    {
    }
}
