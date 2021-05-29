<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarifOperation;

final class CbSarifIdRcb
{
    function get($owner, $repo, $sarif_id): GetSarifOperation
    {
        return new GetSarifOperation($owner, $repo, $sarif_id);
    }
}
