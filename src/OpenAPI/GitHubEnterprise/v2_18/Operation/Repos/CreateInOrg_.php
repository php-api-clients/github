<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos;

final class CreateInOrg_
{
    private const OPERATION_ID = 'repos/create-in-org';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/repos?'));
    }
    function validateResponse()
    {
    }
}
