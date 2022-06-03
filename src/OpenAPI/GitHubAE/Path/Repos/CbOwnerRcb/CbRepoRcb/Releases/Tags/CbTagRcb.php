<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

final class CbTagRcb
{
    function get($owner, $repo, $tag) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseByTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseByTag($owner, $repo, $tag);
    }
}
