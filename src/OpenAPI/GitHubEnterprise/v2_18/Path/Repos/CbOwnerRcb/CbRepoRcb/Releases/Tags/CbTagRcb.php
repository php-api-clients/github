<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

final class CbTagRcb
{
    function get($owner, $repo, $tag) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetReleaseByTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetReleaseByTag($owner, $repo, $tag);
    }
}
