<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Repos;

final class DownloadZipballArchive
{
    private const OPERATION_ID = 'repos/download-zipball-archive';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/zipball/{ref}?'));
    }
    function validateResponse()
    {
    }
}
