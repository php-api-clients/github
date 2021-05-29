<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\GetTag;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha): GetTag
    {
        return new GetTag($owner, $repo, $tag_sha);
    }
}
