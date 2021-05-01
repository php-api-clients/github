<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Comments
{
    function get($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Repos\ListCommentsForCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Repos\ListCommentsForCommitOperation($owner, $repo, $commit_sha, $per_page, $page);
    }
    function post($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Repos\CreateCommitCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Repos\CreateCommitCommentOperation($owner, $repo, $commit_sha);
    }
}
