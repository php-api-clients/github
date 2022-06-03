<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git\GetTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git\GetTag($owner, $repo, $tag_sha);
    }
}
