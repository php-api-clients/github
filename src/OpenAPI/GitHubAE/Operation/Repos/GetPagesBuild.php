<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetPagesBuild
{
    private const OPERATION_ID = 'repos/get-pages-build';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $build_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $build_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->build_id = $build_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{build_id}'), array($this->owner, $this->repo, $this->build_id), '/repos/{owner}/{repo}/pages/builds/{build_id}?'));
    }
    function validateResponse()
    {
    }
}
