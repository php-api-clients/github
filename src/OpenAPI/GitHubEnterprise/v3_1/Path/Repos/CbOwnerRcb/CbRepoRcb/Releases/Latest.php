<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestReleaseOperation($owner, $repo);
    }
}
