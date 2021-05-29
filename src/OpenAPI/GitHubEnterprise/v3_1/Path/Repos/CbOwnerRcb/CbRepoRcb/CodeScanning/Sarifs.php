<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UploadSarif;

final class Sarifs
{
    function post($owner, $repo): UploadSarif
    {
        return new UploadSarif($owner, $repo);
    }
}
