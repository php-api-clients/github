<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DownloadTarballArchive;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadTarballArchive
    {
        return new DownloadTarballArchive($owner, $repo, $ref);
    }
}
