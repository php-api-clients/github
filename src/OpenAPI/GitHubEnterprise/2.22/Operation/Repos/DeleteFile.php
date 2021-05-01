<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos;

final class DeleteFile
{
    private const OPERATION_ID = 'repos/delete-file';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**path parameter**/
    public string $path;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $path)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}?'));
    }
    function validateResponse()
    {
    }
}
