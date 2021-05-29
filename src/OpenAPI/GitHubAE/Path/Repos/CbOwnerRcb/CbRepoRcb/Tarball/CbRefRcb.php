<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DownloadTarballArchive;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadTarballArchive
    {
        return new DownloadTarballArchive($owner, $repo, $ref);
    }
}
