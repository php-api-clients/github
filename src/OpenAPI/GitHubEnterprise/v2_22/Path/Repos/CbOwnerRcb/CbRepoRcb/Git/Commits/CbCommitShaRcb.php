<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits;

final class CbCommitShaRcb
{
    function get($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Git\GetCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Git\GetCommit($owner, $repo, $commit_sha);
    }
}
