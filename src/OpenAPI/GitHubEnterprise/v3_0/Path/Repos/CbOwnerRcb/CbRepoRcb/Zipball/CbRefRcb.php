<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Zipball;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DownloadZipballArchiveOperation;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadZipballArchiveOperation
    {
        return new DownloadZipballArchiveOperation($owner, $repo, $ref);
    }
}
