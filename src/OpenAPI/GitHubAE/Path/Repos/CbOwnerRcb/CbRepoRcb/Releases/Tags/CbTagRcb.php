<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetReleaseByTag;

final class CbTagRcb
{
    function get($owner, $repo, $tag): GetReleaseByTag
    {
        return new GetReleaseByTag($owner, $repo, $tag);
    }
}
