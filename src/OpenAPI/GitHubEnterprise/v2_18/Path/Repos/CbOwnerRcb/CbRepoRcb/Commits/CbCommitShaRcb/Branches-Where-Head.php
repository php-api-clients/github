<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Branches-Where-Head
{
    function get($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListBranchesForHeadCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListBranchesForHeadCommitOperation($owner, $repo, $commit_sha);
    }
}