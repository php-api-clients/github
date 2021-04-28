<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class CommitActivity
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitActivityStatsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommitActivityStatsOperation($owner, $repo);
    }
}
