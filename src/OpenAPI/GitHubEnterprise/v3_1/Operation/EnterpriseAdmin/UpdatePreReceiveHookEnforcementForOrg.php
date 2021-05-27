<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class UpdatePreReceiveHookEnforcementForOrg
{
    private const OPERATION_ID = 'enterprise-admin/update-pre-receive-hook-enforcement-for-org';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}', '{pre_receive_hook_id}'), array($this->org, $this->pre_receive_hook_id), '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}?'));
    }
    function validateResponse()
    {
    }
}
