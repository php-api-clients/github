<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetContent_
{
    private const OPERATION_ID = 'repos/get-content';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**path parameter**/
    private readonly string $path;
    /**The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)**/
    private readonly string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $path, string $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{path}', '{ref}'), array($this->owner, $this->repo, $this->path, $this->ref), '/repos/{owner}/{repo}/contents/{path}?ref={ref}'));
    }
    function validateResponse()
    {
    }
}
