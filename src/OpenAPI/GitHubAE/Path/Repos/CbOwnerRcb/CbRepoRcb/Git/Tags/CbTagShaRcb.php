<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTagOperation;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha): GetTagOperation
    {
        return new GetTagOperation($owner, $repo, $tag_sha);
    }
}
