<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\EnterpriseAdmin;

final class GetPreReceiveHook
{
    private const OPERATION_ID = 'enterprise-admin/get-pre-receive-hook';
    /****/
    public int $pre_receive_hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($pre_receive_hook_id)
    {
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{pre_receive_hook_id}'), array($this->pre_receive_hook_id), '/admin/pre-receive-hooks/{pre_receive_hook_id}?'));
    }
    function validateResponse()
    {
    }
}
