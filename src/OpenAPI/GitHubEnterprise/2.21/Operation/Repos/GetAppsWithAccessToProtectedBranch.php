<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos;

final class GetAppsWithAccessToProtectedBranch
{
    private const OPERATION_ID = 'repos/get-apps-with-access-to-protected-branch';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps?'));
    }
    function validateResponse()
    {
    }
}
