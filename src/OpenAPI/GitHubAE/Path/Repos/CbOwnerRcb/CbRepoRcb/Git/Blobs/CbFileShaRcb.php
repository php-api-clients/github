<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha): GetBlob
    {
        return new GetBlob($owner, $repo, $file_sha);
    }
}
