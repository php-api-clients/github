<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Git
{
    public function createBlob_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob_($owner, $repo);
    }
    public function getBlob_(string $owner, string $repo, string $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob_($owner, $repo, $file_sha);
    }
    public function createCommit_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommit_($owner, $repo);
    }
    public function getCommit_(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetCommit_($owner, $repo, $commit_sha);
    }
    public function listMatchingRefs_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\ListMatchingRefs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\ListMatchingRefs_($owner, $repo, $ref);
    }
    public function getRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRef_($owner, $repo, $ref);
    }
    public function createRef_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef_($owner, $repo);
    }
    public function deleteRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef_($owner, $repo, $ref);
    }
    public function updateRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef_($owner, $repo, $ref);
    }
    public function createTag_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag_($owner, $repo);
    }
    public function getTag_(string $owner, string $repo, string $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag_($owner, $repo, $tag_sha);
    }
    public function createTree_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree_($owner, $repo);
    }
    public function getTree_(string $owner, string $repo, string $tree_sha, string $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree_($owner, $repo, $tree_sha, $recursive);
    }
}
