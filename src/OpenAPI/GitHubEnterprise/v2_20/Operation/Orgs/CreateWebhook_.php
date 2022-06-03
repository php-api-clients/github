<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs;

final class CreateWebhook_
{
    private const OPERATION_ID = 'orgs/create-webhook';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/hooks?'));
    }
    function validateResponse()
    {
    }
}
