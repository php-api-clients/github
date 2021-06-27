<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetReadme
{
    private const OPERATION_ID = 'repos/get-readme';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)**/
    public string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/readme?ref={ref}'));
    }
    function validateResponse()
    {
    }
}
