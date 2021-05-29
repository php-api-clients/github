<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\GetTagOperation;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha): GetTagOperation
    {
        return new GetTagOperation($owner, $repo, $tag_sha);
    }
}
