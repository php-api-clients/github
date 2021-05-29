<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetReleaseByTagOperation;

final class CbTagRcb
{
    function get($owner, $repo, $tag): GetReleaseByTagOperation
    {
        return new GetReleaseByTagOperation($owner, $repo, $tag);
    }
}
