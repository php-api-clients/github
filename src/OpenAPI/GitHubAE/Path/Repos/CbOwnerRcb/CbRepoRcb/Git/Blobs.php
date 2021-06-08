<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob;

final class Blobs
{
    function post($owner, $repo): CreateBlob
    {
        return new CreateBlob($owner, $repo);
    }
}
