<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git;

final class GetBlob_
{
    private const OPERATION_ID = 'git/get-blob';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /****/
    public string $file_sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $file_sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->file_sha = $file_sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{file_sha}'), array($this->owner, $this->repo, $this->file_sha), '/repos/{owner}/{repo}/git/blobs/{file_sha}'));
    }
    function validateResponse()
    {
    }
}
