<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits;

final class CbCommitShaRcb
{
    function get($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\Operation\Git\GetCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\GetCommitOperation($owner, $repo, $commit_sha);
    }
}
