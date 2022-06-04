<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git;

final class GetTag_
{
    private const OPERATION_ID = 'git/get-tag';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /****/
    public string $tag_sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $tag_sha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tag_sha = $tag_sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tag_sha}'), array($this->owner, $this->repo, $this->tag_sha), '/repos/{owner}/{repo}/git/tags/{tag_sha}'));
    }
    function validateResponse()
    {
    }
}
