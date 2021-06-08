<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetTree
{
    private const OPERATION_ID = 'git/get-tree';
    public string $owner;
    public string $repo;
    public string $tree_sha;
    /**Setting this parameter to any value returns the objects or subtrees referenced by the tree specified in `:tree_sha`. For example, setting `recursive` to any of the following will enable returning objects or subtrees: `0`, `1`, `"true"`, and `"false"`. Omit this parameter to prevent recursively returning objects or subtrees.**/
    public string $recursive;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $tree_sha, $recursive)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->tree_sha  = $tree_sha;
        $this->recursive = $recursive;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{tree_sha}', '{recursive}'], [$this->owner, $this->repo, $this->tree_sha, $this->recursive], '/repos/{owner}/{repo}/git/trees/{tree_sha}?recursive={recursive}'));
    }

    function validateResponse(): void
    {
    }
}
