<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\UploadSarifOperation;

final class Sarifs
{
    function post($owner, $repo): UploadSarifOperation
    {
        return new UploadSarifOperation($owner, $repo);
    }
}
