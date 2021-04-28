<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Orgs;

final class CreateWebhook
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
