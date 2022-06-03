<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams;

final class Create_
{
    private const OPERATION_ID = 'teams/create';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/teams?'));
    }
    function validateResponse()
    {
    }
}
