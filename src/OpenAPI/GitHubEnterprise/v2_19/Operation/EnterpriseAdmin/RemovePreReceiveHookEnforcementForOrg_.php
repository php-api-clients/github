<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

final class RemovePreReceiveHookEnforcementForOrg_
{
    private const OPERATION_ID = 'enterprise-admin/remove-pre-receive-hook-enforcement-for-org';
    /****/
    public string $org;
    /**pre_receive_hook_id parameter**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{pre_receive_hook_id}'), array($this->org, $this->pre_receive_hook_id), '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}'));
    }
    function validateResponse()
    {
    }
}
