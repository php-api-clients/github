<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git;

final class GetTree_
{
    private const OPERATION_ID = 'git/get-tree';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /****/
    public string $tree_sha;
    /**Setting this parameter to any value returns the objects or subtrees referenced by the tree specified in `:tree_sha`. For example, setting `recursive` to any of the following will enable returning objects or subtrees: `0`, `1`, `"true"`, and `"false"`. Omit this parameter to prevent recursively returning objects or subtrees.**/
    public string $recursive;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $tree_sha, $recursive)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tree_sha = $tree_sha;
        $this->recursive = $recursive;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tree_sha}', '{recursive}'), array($this->owner, $this->repo, $this->tree_sha, $this->recursive), '/repos/{owner}/{repo}/git/trees/{tree_sha}?recursive={recursive}'));
    }
    function validateResponse()
    {
    }
}
