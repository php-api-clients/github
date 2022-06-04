<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class RemovePreReceiveHookEnforcementForRepo_
{
    private const OPERATION_ID = 'enterprise-admin/remove-pre-receive-hook-enforcement-for-repo';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**pre_receive_hook_id parameter**/
    public int $pre_receive_hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pre_receive_hook_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{pre_receive_hook_id}'), array($this->owner, $this->repo, $this->pre_receive_hook_id), '/repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}'));
    }
    function validateResponse()
    {
    }
}
