<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarif;

final class Sarifs
{
    function post($owner, $repo): UploadSarif
    {
        return new UploadSarif($owner, $repo);
    }
}
