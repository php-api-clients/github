<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation;

final class Git
{
    public function createBlob_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateBlob_($owner, $repo);
    }
    public function getBlob_($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetBlob_($owner, $repo, $file_sha);
    }
    public function createCommit_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateCommit_($owner, $repo);
    }
    public function getCommit_($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetCommit_($owner, $repo, $commit_sha);
    }
    public function createRef_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateRef_($owner, $repo);
    }
    public function getAllRefs_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetAllRefs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetAllRefs_($owner, $repo, $per_page, $page);
    }
    public function deleteRef_($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\DeleteRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\DeleteRef_($owner, $repo, $ref);
    }
    public function updateRef_($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\UpdateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\UpdateRef_($owner, $repo, $ref);
    }
    public function createTag_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateTag_($owner, $repo);
    }
    public function getTag_($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTag_($owner, $repo, $tag_sha);
    }
    public function createTree_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateTree_($owner, $repo);
    }
    public function getTree_($owner, $repo, $tree_sha, $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTree_($owner, $repo, $tree_sha, $recursive);
    }
}
