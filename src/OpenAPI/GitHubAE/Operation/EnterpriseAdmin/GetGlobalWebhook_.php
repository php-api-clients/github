<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class GetGlobalWebhook_
{
    private const OPERATION_ID = 'enterprise-admin/get-global-webhook';
    /**The unique identifier of the hook.**/
    private readonly int $hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $hook_id)
    {
        $this->hook_id = $hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{hook_id}'), array($this->hook_id), '/admin/hooks/{hook_id}'));
    }
    function validateResponse()
    {
    }
}
