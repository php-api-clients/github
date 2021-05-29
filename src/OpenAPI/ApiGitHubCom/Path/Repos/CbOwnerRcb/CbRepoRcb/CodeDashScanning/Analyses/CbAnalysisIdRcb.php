<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\DeleteAnalysis;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetAnalysis;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id): GetAnalysis
    {
        return new GetAnalysis($owner, $repo, $analysis_id);
    }

    function delete($owner, $repo, $analysis_id, $confirm_delete): DeleteAnalysis
    {
        return new DeleteAnalysis($owner, $repo, $analysis_id, $confirm_delete);
    }
}
