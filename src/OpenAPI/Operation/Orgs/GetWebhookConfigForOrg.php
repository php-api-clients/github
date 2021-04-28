<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Orgs;

final class GetWebhookConfigForOrg
{
    private const OPERATION_ID = 'orgs/get-webhook-config-for-org';
    /****/
    public string $org;
    /****/
    public int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $hook_id)
    {
        $this->org = $org;
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), '/orgs/{org}/hooks/{hook_id}/config?'));
    }
    function validateResponse()
    {
    }
}
