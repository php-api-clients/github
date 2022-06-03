<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs;

final class PingWebhook_
{
    private const OPERATION_ID = 'orgs/ping-webhook';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), '/orgs/{org}/hooks/{hook_id}/pings?'));
    }
    function validateResponse()
    {
    }
}
