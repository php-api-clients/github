<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetPagesBuild_
{
    private const OPERATION_ID = 'repos/get-pages-build';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{build_id}'), array($this->owner, $this->repo, $this->build_id), '/repos/{owner}/{repo}/pages/builds/{build_id}'));
    }
    function validateResponse()
    {
    }
}
