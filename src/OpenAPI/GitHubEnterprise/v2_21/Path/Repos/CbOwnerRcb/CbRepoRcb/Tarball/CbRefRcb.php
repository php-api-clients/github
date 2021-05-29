<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\DownloadTarballArchiveOperation;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadTarballArchiveOperation
    {
        return new DownloadTarballArchiveOperation($owner, $repo, $ref);
    }
}
