<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class GetReadmeInDirectory
{
    private const OPERATION_ID = 'repos/get-readme-in-directory';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The alternate path to look for a README file**/
    public string $dir;
    /**The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)**/
    public string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $dir, $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->dir = $dir;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{dir}', '{ref}'), array($this->owner, $this->repo, $this->dir, $this->ref), '/repos/{owner}/{repo}/readme/{dir}?ref={ref}'));
    }
    function validateResponse()
    {
    }
}
