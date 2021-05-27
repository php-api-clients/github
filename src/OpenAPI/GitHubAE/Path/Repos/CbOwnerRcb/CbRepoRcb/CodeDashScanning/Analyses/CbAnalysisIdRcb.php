<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses;

final class CbAnalysisIdRcb
{
    function get($owner, $repo, $analysis_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysisOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAnalysisOperation($owner, $repo, $analysis_id);
    }
}
