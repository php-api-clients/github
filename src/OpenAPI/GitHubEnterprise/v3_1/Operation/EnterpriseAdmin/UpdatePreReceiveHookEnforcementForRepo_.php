<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class UpdatePreReceiveHookEnforcementForRepo_
{
    private const OPERATION_ID = 'enterprise-admin/update-pre-receive-hook-enforcement-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the pre-receive hook.**/
    private readonly int $pre_receive_hook_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $pre_receive_hook_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{pre_receive_hook_id}'), array($this->owner, $this->repo, $this->pre_receive_hook_id), '/repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}'));
    }
    function validateResponse()
    {
    }
}
