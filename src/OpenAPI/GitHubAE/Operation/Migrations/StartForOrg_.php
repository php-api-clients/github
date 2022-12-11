<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations;

final class StartForOrg_
{
    private const OPERATION_ID = 'migrations/start-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/migrations'));
    }
    function validateResponse()
    {
    }
}
