<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin;

final class GetPreReceiveHookForOrg
{
    private const OPERATION_ID = 'enterprise-admin/get-pre-receive-hook-for-org';
    /****/
    public string $org;
    /****/
    public int $pre_receive_hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $pre_receive_hook_id)
    {
        $this->org = $org;
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{pre_receive_hook_id}'), array($this->org, $this->pre_receive_hook_id), '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}?'));
    }
    function validateResponse()
    {
    }
}
