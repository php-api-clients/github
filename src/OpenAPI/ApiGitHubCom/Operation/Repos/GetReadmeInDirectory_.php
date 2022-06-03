<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetReadmeInDirectory_
{
    private const OPERATION_ID = 'repos/get-readme-in-directory';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
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
