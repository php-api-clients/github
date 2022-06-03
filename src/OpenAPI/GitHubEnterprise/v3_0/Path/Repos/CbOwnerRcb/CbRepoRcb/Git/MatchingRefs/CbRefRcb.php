<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

final class CbRefRcb
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\ListMatchingRefs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\ListMatchingRefs($owner, $repo, $ref, $per_page, $page);
    }
}
