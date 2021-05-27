<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTagOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTagOperation($owner, $repo, $tag_sha);
    }
}
