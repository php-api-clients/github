<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Comments
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListCommentsForCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListCommentsForCommit($owner, $repo, $commit_sha, $per_page, $page);
    }
    function post($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\CreateCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\CreateCommitComment($owner, $repo, $commit_sha);
    }
}
