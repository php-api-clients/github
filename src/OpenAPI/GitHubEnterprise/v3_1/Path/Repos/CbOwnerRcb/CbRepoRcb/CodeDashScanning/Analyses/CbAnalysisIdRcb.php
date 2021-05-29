<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\DeleteAnalysisOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAnalysisOperation;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id): GetAnalysisOperation
    {
        return new GetAnalysisOperation($owner, $repo, $analysis_id);
    }

    function delete($owner, $repo, $analysis_id, $confirm_delete): DeleteAnalysisOperation
    {
        return new DeleteAnalysisOperation($owner, $repo, $analysis_id, $confirm_delete);
    }
}
