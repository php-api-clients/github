<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb;

final class Branches-Where-Head
{
    function get($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListBranchesForHeadCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListBranchesForHeadCommitOperation($owner, $repo, $commit_sha);
    }
}
