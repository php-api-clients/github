<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

final class GetGlobalWebhook
{
    private const OPERATION_ID = 'enterprise-admin/get-global-webhook';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{hook_id}'), array($this->hook_id), '/admin/hooks/{hook_id}?'));
    }
    function validateResponse()
    {
    }
}
