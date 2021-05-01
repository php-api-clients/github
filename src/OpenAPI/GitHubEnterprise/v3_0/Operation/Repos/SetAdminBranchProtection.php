<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class SetAdminBranchProtection
{
    private const OPERATION_ID = 'repos/set-admin-branch-protection';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The name of the branch.**/
    public string $branch;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $branch)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins?'));
    }
    function validateResponse()
    {
    }
}