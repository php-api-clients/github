<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag($owner, $repo, $tag_sha);
    }
}
