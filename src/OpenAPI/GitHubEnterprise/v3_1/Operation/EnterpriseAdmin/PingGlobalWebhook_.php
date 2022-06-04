<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class PingGlobalWebhook_
{
    private const OPERATION_ID = 'enterprise-admin/ping-global-webhook';
    /**The unique identifier of the hook.**/
    public int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($hook_id)
    {
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{hook_id}'), array($this->hook_id), '/admin/hooks/{hook_id}/pings'));
    }
    function validateResponse()
    {
    }
}
