<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git;

final class GetBlob_
{
    private const OPERATION_ID = 'git/get-blob';
    /****/
    public string $owner;
    /****/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{file_sha}'), array($this->owner, $this->repo, $this->file_sha), '/repos/{owner}/{repo}/git/blobs/{file_sha}?'));
    }
    function validateResponse()
    {
    }
}
