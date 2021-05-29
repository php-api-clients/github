<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha): GetTag
    {
        return new GetTag($owner, $repo, $tag_sha);
    }
}
