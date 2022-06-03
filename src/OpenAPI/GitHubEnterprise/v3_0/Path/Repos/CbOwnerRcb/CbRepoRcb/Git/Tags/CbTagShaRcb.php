<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\GetTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\GetTag($owner, $repo, $tag_sha);
    }
}
