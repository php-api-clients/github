<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysisOperation;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id): GetAnalysisOperation
    {
        return new GetAnalysisOperation($owner, $repo, $analysis_id);
    }
}
