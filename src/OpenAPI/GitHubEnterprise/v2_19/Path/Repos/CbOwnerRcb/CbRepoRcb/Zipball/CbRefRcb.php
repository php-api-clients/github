<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Zipball;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DownloadZipballArchiveOperation;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadZipballArchiveOperation
    {
        return new DownloadZipballArchiveOperation($owner, $repo, $ref);
    }
}
