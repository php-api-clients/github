<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

final class PingGlobalWebhook_
{
    private const OPERATION_ID = 'enterprise-admin/ping-global-webhook';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id)
    {
        $this->accept = $accept;
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{hook_id}'), array($this->hook_id), '/admin/hooks/{hook_id}/pings?'));
    }
    function validateResponse()
    {
    }
}
