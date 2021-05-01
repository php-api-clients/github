<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Repos\CbOwnerRcb\CbRepoRcb\Compare;

final class CbBaseheadRcb
{
    function get($owner, $repo, $basehead) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\CompareCommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\CompareCommitsOperation($owner, $repo, $basehead);
    }
}
