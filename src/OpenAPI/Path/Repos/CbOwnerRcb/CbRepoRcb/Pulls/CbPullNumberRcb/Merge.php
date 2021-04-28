<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Merge
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\CheckIfMergedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\CheckIfMergedOperation($owner, $repo, $pull_number);
    }
    function put($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\Operation\Pulls\MergeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Pulls\MergeOperation($owner, $repo, $pull_number);
    }
}
