<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class DeleteFile_
{
    private const OPERATION_ID = 'repos/delete-file';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**path parameter**/
    private readonly string $path;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $path)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}'));
    }
    function validateResponse()
    {
    }
}
