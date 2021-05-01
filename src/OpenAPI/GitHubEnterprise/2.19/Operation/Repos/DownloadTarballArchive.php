<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Repos;

final class DownloadTarballArchive
{
    private const OPERATION_ID = 'repos/download-tarball-archive';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/tarball/{ref}?'));
    }
    function validateResponse()
    {
    }
}
