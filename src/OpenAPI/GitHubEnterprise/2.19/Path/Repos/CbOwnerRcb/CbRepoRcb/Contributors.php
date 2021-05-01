<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Contributors
{
    function get($owner, $repo, $anon, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Repos\ListContributorsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Repos\ListContributorsOperation($owner, $repo, $anon, $per_page, $page);
    }
}
