<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetLatestPagesBuildOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetLatestPagesBuildOperation($owner, $repo);
    }
}