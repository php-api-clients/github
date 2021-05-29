<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Zipball;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DownloadZipballArchive;

final class CbRefRcb
{
    function get($owner, $repo, $ref): DownloadZipballArchive
    {
        return new DownloadZipballArchive($owner, $repo, $ref);
    }
}
