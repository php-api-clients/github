<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

final class GetReleaseByTag_
{
    private const OPERATION_ID = 'repos/get-release-by-tag';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**tag parameter**/
    public string $tag;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $tag)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tag = $tag;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tag}'), array($this->owner, $this->repo, $this->tag), '/repos/{owner}/{repo}/releases/tags/{tag}'));
    }
    function validateResponse()
    {
    }
}
