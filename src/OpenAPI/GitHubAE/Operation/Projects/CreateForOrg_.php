<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects;

final class CreateForOrg_
{
    private const OPERATION_ID = 'projects/create-for-org';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/projects'));
    }
    function validateResponse()
    {
    }
}
